<?php
/**
 * PHP Version 7.2
 *
 * @category Controllers
 * @package App\Http\Controllers
 * @author  Thiago Mallon <thiagomallon@gmail.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @link    https://www.linkedin.com/in/thiago-mallon/
 */

/**
 * File namespace
 *
 * @subpackage Http\Controllers
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class DashboardController
 *
 * @category Controllers
 * @package App\Http\Controllers
 * @author  Thiago Mallon <thiagomallon@gmail.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @link    https://www.linkedin.com/in/thiago-mallon/
 */
class DashboardController extends Controller
{
    /**
     * Public method __construct - The constructor method
     *
     * @method void __construct The constructor method
     * @return void 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Public method index - The index action
     *
     * @method object index The index action
     * @return object Returns a view object
     */
    public function index(): object
    {
        return view('dashboard.home');
    }
}
