module WebsiteHelper
  def login_html
    unless current_user
      text = '<p>You need to log in.</p>'
      text += '<p><a href="/why_register">Why Sign Up?</a>&nbsp;&nbsp;'
      text += "<a id='open_login' class='TopButtons' href='#'>Log in</a>&nbsp;&nbsp;<a class='TopButtons' href='/register'>Sign Up</a></p>"
    else
      text = "<p>Login as:&nbsp;<b>"  + current_user.name + "</b></p>"
      text += '<a href="/logout" class="TopButtons">Log out</a>'
      #text += "<p><a class='TopButtons' href='#'>Log out</a></p>"
    end
    
    return text.html_safe 
  end
end
