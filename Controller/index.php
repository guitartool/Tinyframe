<?php

    class Index extends View{
		
        public function start($name = ''){
			
			// New model created
            $user = $this->model('User');
			
			// Load an html page and maybe send some data
			$this->viewLoader('Header/header');
			$this->viewLoader('welcome', ['name' => $name]);
			$this->viewLoader('Footer/footer');
			
        }
		
    }