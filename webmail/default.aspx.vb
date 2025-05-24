Partial Class _default
    Inherits System.Web.UI.Page

    Protected Sub Page_Init(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Init
        'Server.Transfer("http://emailmg.easycgi.com/sqmail/src/login.php")
        Response.Redirect("https://emailmg.easycgi.com/roundcube/")
    End Sub

End Class
