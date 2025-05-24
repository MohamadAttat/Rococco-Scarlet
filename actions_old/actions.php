    <?php

    // Include the database connection
    include '../database_includes/db.php';
    include 'action_email.php';

    // Check if the file is included correctly
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Process actions
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {

        $action = $_POST['action'];

        if ($action === 'fetch_menu') {


            // Fetch categories
            $stmt = $conn->prepare("SELECT category_uuid, category_name, category_description, category_image FROM tbl_menu_categories WHERE is_visible = 1 ORDER BY category_order");
            $stmt->execute();
            $result = $stmt->get_result();
            $categories = $result->fetch_all(MYSQLI_ASSOC);

            $menu = [];

            // Loop through each category and fetch associated items
            foreach ($categories as $category) {
                // Fetch items for the current category
                $stmt = $conn->prepare("SELECT item_name, item_description, item_price FROM tbl_menu_items WHERE linked_to_category_uuid = ? AND is_visible = 1 ORDER BY item_order limit 100");
                $stmt->bind_param('s', $category['category_uuid']);
                $stmt->execute();
                $result = $stmt->get_result();
                $items = $result->fetch_all(MYSQLI_ASSOC);

                // Add category and items to the menu
                $menu[] = [
                    'category_name' => $category['category_name'],
                    'category_description' => $category['category_description'],
                    'category_image' => $category['category_image'],
                    'items' => $items,
                ];
            }

            // Ensure all string data is UTF-8 encoded
            array_walk_recursive($menu, function (&$item) {
                if (is_string($item)) {
                    $item = utf8_encode($item);
                }
            });

            // Log the $menu content for debugging purposes (remove after debugging)
            file_put_contents('debug_log.txt', print_r($menu, true)); // Optional: remove this after debugging

            // Try to encode the array into JSON
            $json = json_encode($menu);

            // Check for JSON encoding errors
            if ($json === false) {
                echo json_encode([
                    'error' => 'Failed to encode menu data to JSON',
                    'json_error' => json_last_error_msg() // Provides detailed error info
                ]);
                exit;
            }

            // Return the JSON response
            header('Content-Type: application/json');
            echo $json;

        } 
        if ($action === 'fetch_testimonials') {

            // Fetch testimonials where show status is 1 (visible testimonials only)
            $stmt = $conn->prepare("SELECT testimonial_name, testimonial_position, testimonial_message, testimonial_image_url FROM tbl_testimonials WHERE testimonial_show_status = 1 ORDER BY testimonial_id limit 100");
            $stmt->execute();
            $result = $stmt->get_result();
            $testimonials = $result->fetch_all(MYSQLI_ASSOC);

            // Ensure all string data is UTF-8 encoded
            array_walk_recursive($testimonials, function (&$item) {
                if (is_string($item)) {
                    $item = utf8_encode($item);
                }
            });

            // Log the $testimonials content for debugging purposes (remove after debugging)
            file_put_contents('debug_log.txt', print_r($testimonials, true), FILE_APPEND); // Optional: remove this after debugging

            // Try to encode the array into JSON
            $json = json_encode($testimonials);

            // Check for JSON encoding errors
            if ($json === false) {
                echo json_encode([
                    'error' => 'Failed to encode testimonials data to JSON',
                    'json_error' => json_last_error_msg() // Provides detailed error info
                ]);
                exit;
            }

            // Return the JSON response
            header('Content-Type: application/json');
            echo $json;
        }

        if ($action === 'fetch_services') {
            // Fetch visible services ordered by service_order_number
            $stmt = $conn->prepare("SELECT service_icon, service_title, service_description,service_order_number
                                    FROM tbl_services 
                                    WHERE service_is_visible = 1 
                                    ORDER BY service_order_number ASC limit 100");
            $stmt->execute();
            $result = $stmt->get_result();
            $services = $result->fetch_all(MYSQLI_ASSOC);

            // Ensure all string data is UTF-8 encoded
            array_walk_recursive($services, function (&$item) {
                if (is_string($item)) {
                    $item = utf8_encode($item);
                }
            });

            // Encode data into JSON
            $json = json_encode($services);

            // Check for JSON encoding errors
            if ($json === false) {
                echo json_encode([
                    'error' => 'Failed to encode services data to JSON',
                    'json_error' => json_last_error_msg()
                ]);
                exit;
            }

            // Return the JSON response
            header('Content-Type: application/json');
            echo $json;
        }

        if ($action === 'fetch_team_members') {
            // Fetch team members that are visible (is_visible = 1)
            $stmt = $conn->prepare("SELECT id, name, position, image_url, facebook_url, twitter_url, pinterest_url, google_plus_url, is_visible 
                                    FROM tbl_team_members 
                                    WHERE is_visible = 1 
                                    ORDER BY id limit 100");
            $stmt->execute();
            $result = $stmt->get_result();
            $team_members = $result->fetch_all(MYSQLI_ASSOC);

            // Ensure all string data is UTF-8 encoded
            array_walk_recursive($team_members, function (&$item) {
                if (is_string($item)) {
                    $item = utf8_encode($item);
                }
            });

            // Log the $team_members content for debugging purposes (remove after debugging)
            file_put_contents('debug_log.txt', print_r($team_members, true), FILE_APPEND); // Optional: remove this after debugging

            // Try to encode the array into JSON
            $json = json_encode($team_members);

            // Check for JSON encoding errors
            if ($json === false) {
                echo json_encode([
                    'error' => 'Failed to encode team members data to JSON',
                    'json_error' => json_last_error_msg() // Provides detailed error info
                ]);
                exit;
            }

            // Return the JSON response
            header('Content-Type: application/json');
            echo $json;
        }

        if ($action === 'fetch_menu_items') {
            // Get the category name from the request
            $category = $_POST['category'];

            // Fetch the category from the database
            $stmt = $conn->prepare("SELECT * FROM tbl_menu_categories WHERE category_name = ? AND is_visible = 1");
            $stmt->bind_param('s', $category);
            $stmt->execute();
            $categoryResult = $stmt->get_result();
            $categoryData = $categoryResult->fetch_assoc();

            if ($categoryData) {
                // Fetch items for the category
                $stmt = $conn->prepare("SELECT item_name, item_description, item_price FROM tbl_menu_items WHERE linked_to_category_uuid = ? AND is_visible = 1 limit 100");
                $stmt->bind_param('s', $categoryData['category_uuid']);
                $stmt->execute();
                $itemsResult = $stmt->get_result();
                $items = $itemsResult->fetch_all(MYSQLI_ASSOC);

                // Prepare the response data
                $response = [
                    'category_name' => $categoryData['category_name'],
                    'category_description' => $categoryData['category_description'],
                    'category_image' => $categoryData['category_image'],
                    'items' => $items
                ];

                // Encode response to JSON
                echo json_encode(['status' => 'success', 'data' => $response]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Category not found']);
            }
        }


        if ($action === 'fetch_daily_specials') {
            // Fetch daily specials from the database
            $stmt = $conn->prepare("SELECT id, name, description, price, image_url, created_at FROM tbl_daily_specials ORDER BY created_at DESC limit 100");
            $stmt->execute();
            $result = $stmt->get_result();
            $daily_specials = $result->fetch_all(MYSQLI_ASSOC);
        
            // Ensure all string data is UTF-8 encoded
            array_walk_recursive($daily_specials, function (&$item) {
                if (is_string($item)) {
                    $item = utf8_encode($item);
                }
            });
        
            // Try to encode the array into JSON
            $json = json_encode([
                'data' => $daily_specials
            ]);
        
            // Check for JSON encoding errors
            if ($json === false) {
                echo json_encode([
                    'error' => 'Failed to encode daily specials data to JSON',
                    'json_error' => json_last_error_msg() // Provides detailed error info
                ]);
                exit;
            }
        
            // Return the JSON response
            header('Content-Type: application/json');
            echo $json;
        }
        
    
        if ($action === 'make_reservation') {
            // Extract reservation details from POST request
            $customer_name = trim($_POST['username'] ?? '');
            $customer_email = trim($_POST['email'] ?? '');
            $customer_phone = trim($_POST['phone'] ?? '');
            $reservation_date = trim($_POST['date'] ?? '');
            $reservation_time = trim($_POST['time'] ?? '');
            $number_of_guests = intval($_POST['people'] ?? 1);
        

        // Validate required fields
            if (empty($customer_name) || !preg_match("/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/", $customer_name)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid or missing full name (must include at least a first and last name)']);
                exit;
            }
            if (empty($customer_email) || !filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid or missing email']);
                exit;
            }
        
            if (empty($customer_phone) || !preg_match("/^\+?[0-9]{7,15}$/", $customer_phone)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid or missing phone number']);
                exit;
            }
        
            if (empty($reservation_date) || !preg_match("/^(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])\/\d{4}$/", $reservation_date)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid or missing reservation date']);
                exit;
            }
        
            if (empty($reservation_time) || !preg_match("/^(0?[1-9]|1[0-2]):[0-5][0-9]\s?(AM|PM)$/i", $reservation_time)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid or missing reservation time']);
                exit;
            }
        
            if ($number_of_guests < 1) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid number of guests']);
                exit;
            }
        
            // Convert date format from MM/DD/YYYY to YYYY-MM-DD for database storage
            $date_parts = explode('/', $reservation_date);
            $reservation_date_db = "$date_parts[2]-$date_parts[0]-$date_parts[1]";
        
            // Insert the reservation into the database
            $stmt = $conn->prepare("INSERT INTO tbl_reservations (customer_name, customer_email, customer_phone, reservation_date, reservation_time, number_of_guests) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('sssssi', $customer_name, $customer_email, $customer_phone, $reservation_date_db, $reservation_time, $number_of_guests);
        
            if ($stmt->execute()) {
                $new_reservation_id = $stmt->insert_id;
        
                // Fetch all reservations for the same date
                $query = "SELECT id, customer_name, customer_email, customer_phone, reservation_time, number_of_guests FROM tbl_reservations WHERE reservation_date = ? ORDER BY reservation_time ASC";
                $stmt2 = $conn->prepare($query);
                $stmt2->bind_param("s", $reservation_date_db);
                $stmt2->execute();
                $result = $stmt2->get_result();
        
                // Build reservation list in table format
                $reservations_list = "<h3 style='color: #333;'>Reservations for " . date('F j, Y', strtotime($reservation_date_db)) . "</h3>";
                $reservations_list .= "<table style='width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;'>";
                $reservations_list .= "<tr style='background: #f4f4f4; text-align: left;'>";
                $reservations_list .= "<th style='padding: 10px; border: 1px solid #ddd;'>Reservation ID</th>";
                $reservations_list .= "<th style='padding: 10px; border: 1px solid #ddd;'>Customer Name</th>";
                $reservations_list .= "<th style='padding: 10px; border: 1px solid #ddd;'>Email</th>";
                $reservations_list .= "<th style='padding: 10px; border: 1px solid #ddd;'>Phone</th>";
                $reservations_list .= "<th style='padding: 10px; border: 1px solid #ddd;'>Time</th>";
                $reservations_list .= "<th style='padding: 10px; border: 1px solid #ddd;'>Number of Guests</th></tr>";
        
                while ($row = $result->fetch_assoc()) {
                    $highlight = ($row['id'] == $new_reservation_id) ? "background: #ffeb3b; font-weight: bold;" : "";
                    $formatted_time = date('g:i A', strtotime($row['reservation_time']));
                    $reservations_list .= "<tr style='$highlight'>";
                    $reservations_list .= "<td style='padding: 10px; border: 1px solid #ddd;'>{$row['id']}</td>";
                    $reservations_list .= "<td style='padding: 10px; border: 1px solid #ddd;'>{$row['customer_name']}</td>";
                    $reservations_list .= "<td style='padding: 10px; border: 1px solid #ddd;'>{$row['customer_email']}</td>";
                    $reservations_list .= "<td style='padding: 10px; border: 1px solid #ddd;'>{$row['customer_phone']}</td>";
                    $reservations_list .= "<td style='padding: 10px; border: 1px solid #ddd;'>$formatted_time</td>";
                    $reservations_list .= "<td style='padding: 10px; border: 1px solid #ddd;'>{$row['number_of_guests']}</td></tr>";
                }
                $reservations_list .= "</table>";
        
                // Email details
                $email_body = "
                    <div style='font-family: Arial, sans-serif; padding: 20px;'>
                        <h2 style='color: #2c3e50;'>New Reservation Confirmation</h2>
                        <p><strong>Name:</strong> $customer_name</p>
                        <p><strong>Email:</strong> $customer_email</p>
                        <p><strong>Phone:</strong> $customer_phone</p>
                        <p><strong>Date:</strong> " . date('F j, Y', strtotime($reservation_date_db)) . "</p>
                        <p><strong>Time:</strong> " . date('g:i A', strtotime($reservation_time)) . "</p>
                        <p><strong>Number of Guests:</strong> $number_of_guests</p>
                        <br>
                        $reservations_list
                        <br>
                        <p style='color: #777;'>Thank you for your reservation!</p>
                    </div>
                ";
        
                // Send email to admin
                sendEmail($config, 'ranamokdad27@gmail.com', "New Reservation Alert", $email_body);
        
                echo json_encode(['status' => 'success', 'message' => 'Reservation successfully made']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to make a reservation. Please try again.']);
            }
        
            $stmt->close();
            $stmt2->close();
        }
        
        if ($action === 'subscribe') {
            // Extract email from POST request
            $email = trim($_POST['email'] ?? '');
        
            // Validate email
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid or missing email']);
                exit;
            }
        
            // Check if email already exists in the database
            $stmt = $conn->prepare("SELECT id, status FROM tbl_subscribers WHERE email = ?");
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($subscriber_id, $current_status);
        
            if ($stmt->fetch()) {
                // Email already exists
                if ($current_status === 'subscribed') {
                    echo json_encode(['status' => 'error', 'message' => 'Email already subscribed']);
                } else {
                    // Update status to 'subscribed' and clear unsubscribed_at timestamp
                    $stmt = $conn->prepare("UPDATE tbl_subscribers SET status = 'subscribed', unsubscribed_at = NULL WHERE id = ?");
                    $stmt->bind_param('i', $subscriber_id);
        
                    if ($stmt->execute()) {
                        echo json_encode(['status' => 'success', 'message' => 'Resubscription successful']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Failed to resubscribe. Please try again.']);
                    }
                }
            } else {
                // Insert new subscriber
                $stmt = $conn->prepare("INSERT INTO tbl_subscribers (email, status) VALUES (?, 'subscribed')");
                $stmt->bind_param('s', $email);
        
                if ($stmt->execute()) {
                    echo json_encode(['status' => 'success', 'message' => 'Subscription successful']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to subscribe. Please try again.']);
                }
            }
        
            $stmt->close();
        }
        
        if ($action === 'unsubscribe') {
            // Extract email from POST request
            $email = trim($_POST['email'] ?? '');
        
            // Validate email
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid or missing email']);
                exit;
            }
        
            // Check if email exists in the database
            $stmt = $conn->prepare("SELECT id, status FROM tbl_subscribers WHERE email = ?");
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($subscriber_id, $current_status);
        
            if ($stmt->fetch()) {
                if ($current_status === 'unsubscribed') {
                    echo json_encode(['status' => 'error', 'message' => 'Email already unsubscribed']);
                } else {
                    // Update status to 'unsubscribed' and set unsubscribed_at timestamp
                    $stmt = $conn->prepare("UPDATE tbl_subscribers SET status = 'unsubscribed', unsubscribed_at = CURRENT_TIMESTAMP WHERE id = ?");
                    $stmt->bind_param('i', $subscriber_id);
        
                    if ($stmt->execute()) {
                        echo json_encode(['status' => 'success', 'message' => 'Unsubscription successful']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Failed to unsubscribe. Please try again.']);
                    }
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Email not found']);
            }
        
            $stmt->close();
        }

        if ($action === 'send_message') {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $message = trim($_POST['message']);

            // Validate required fields
            if (empty($username) || empty($email) || empty($message)) {
                echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
                exit;
            }

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
                exit;
            }

            // Validate phone number (optional, allows only numbers and +)
            if (!empty($phone) && !preg_match('/^\+?[0-9]{7,15}$/', $phone)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid phone number.']);
                exit;
            }

            // Insert into database using prepared statements
            $stmt = $conn->prepare("INSERT INTO tbl_contact_messages (username, email, phone, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username, $email, $phone, $message);

            if ($stmt->execute()) {
                echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to send message. Try again later.']);
            }

            $stmt->close();
            $conn->close();
            exit;
        } 

        if ($action === 'fetch_blogs') {
            // Fetch visible blog posts
            $stmt = $conn->prepare("SELECT id, title, description, image_url, created_at, is_visible FROM tbl_blogs WHERE is_visible = 1 ORDER BY created_at DESC LIMIT 100");
            $stmt->execute();
            $result = $stmt->get_result();
            $blogs = $result->fetch_all(MYSQLI_ASSOC);
        
            // Return JSON response
            header('Content-Type: application/json');
            echo json_encode(['data' => $blogs]);
            exit;
        }
        if ($action === 'fetch_featured_blog') {
            // Fetch the featured blog from the database
            $stmt = $conn->prepare("SELECT id, title, description, image_url, created_at FROM tbl_blogs WHERE is_featured = 1   LIMIT 100");
            $stmt->execute();
            $result = $stmt->get_result();
            $featured_blog = $result->fetch_all(MYSQLI_ASSOC);
        
        
        
            // Encode the result as JSON
            $json = json_encode([
                'data' => $featured_blog
            ]);
        
            if ($json === false) {
                echo json_encode([
                    'error' => 'Failed to encode featured blog data to JSON',
                    'json_error' => json_last_error_msg()
                ]);
                exit;
            }
        
            // Return the JSON response
            header('Content-Type: application/json');
            echo $json;
        }
        if ($action === 'fetch_event_blog') {
            // Fetch the featured blog from the database
            $stmt = $conn->prepare("SELECT id, title, description, image_url, created_at FROM tbl_blogs WHERE is_event = 1   LIMIT 100");
            $stmt->execute();
            $result = $stmt->get_result();
            $featured_blog = $result->fetch_all(MYSQLI_ASSOC);
        
        
        
            // Encode the result as JSON
            $json = json_encode([
                'data' => $featured_blog
            ]);
        
            if ($json === false) {
                echo json_encode([
                    'error' => 'Failed to encode featured blog data to JSON',
                    'json_error' => json_last_error_msg()
                ]);
                exit;
            }
        
            // Return the JSON response
            header('Content-Type: application/json');
            echo $json;
        }
    } 

    ?>
