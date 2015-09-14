<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class RegistrationServiceProvider extends ServiceProvider {

	protected $namespace = 'App\Http\Controllers';

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

		$router->model('client-type', 'App\Models\Isp\ClientTypes');
//		$router->model('area-name', 'App\Models\Isp\Areas');
//		$router->model('area-group', 'App\Models\Isp\AreaGroups');
		$router->model('package-name', 'App\Models\Isp\Packages');
		$router->model('client-name', 'App\Models\Isp\Client');
//		$router->model('client-name2', 'App\Models\Isp\Clients');
		$router->model('main-pop', 'App\Models\Isp\MainPops');
		$router->model('secondary-pop', 'App\Models\Isp\SecondaryPops');
		$router->model('corporate', 'App\Models\Isp\CorporateClient');
		$router->model('non-corporate', 'App\Models\Isp\NonCorporateClient');
                
                
                
                
		$router->model('register-patient', 'App\Models\Registration\Patient');
		$router->model('register-doctor', 'App\Models\Registration\Doctor');
		$router->model('register-broker', 'App\Models\Registration\Broker');
		$router->model('register-investigation_group', 'App\Models\Registration\InvestigationGroup');

		$router->model('register-investigation', 'App\Models\Registration\Investigation');


		/* Hospital */
		$router->model('hospital_bed_type', 'App\Models\Hospital\BedType');
		$router->model('hospital_bed_no', 'App\Models\Hospital\BedNo');

		$router->model('patient-admission', 'App\Models\Hospital\PatientAdmission');


	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
