<?php
 
namespace App\View\Composers;
 
use App\Repositories\AboutRepository;
use Illuminate\View\View;
 
class CommonComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $users;
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct(AboutRepository $about)
    {
        // Dependencies are automatically resolved by the service container...
        $this->about = $about;
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('count', $this->about->index());
    }
}