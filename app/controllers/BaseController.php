<?php

class BaseController extends Controller {

    protected $theme;
    protected $user;
    protected $cat;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{

        $this->user = Auth::user();
        $this->theme = Theme::uses('default')->layout('default');
        $user = $this->user;
        $this->theme->bind('user', function() use($user)
        {
            return $user;
        });
        $cat = Category::all();
        $this->theme->bind('cat', function() use($cat)
        {
            return $cat;
        });
	}

}