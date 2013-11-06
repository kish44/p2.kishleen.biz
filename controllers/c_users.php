<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
      
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {

        # Setup view
            $this->template->content = View::instance('v_users_signup');
            $this->template->title   = "Sign Up";

        # Render template
            echo $this->template;

    }

    public function p_signup() {

            
    }


    public function login() {
        echo "This is the login page";
    }

    public function logout() {
        echo "This is the logout page";
    }

   public function profile($user_name = NULL) {
		
		# Set up the View
		$this->template->content = View::instance('v_users_profile');
		$this->template->title = "Profile";
		
		#Pass the data to the view
		$this->template->content->user_name = $user_name;
		
		# Display the view
		echo $this->template;
		//$view = View::instance('v_users_profile');
		//$view->user_name = $user_name;
        //echo $view;
    }

} # end of the class