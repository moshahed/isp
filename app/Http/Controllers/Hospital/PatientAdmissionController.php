<?php namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;

use App\Models\Hospital\BedNo;

use App\Models\Registration\Doctor;

use App\Models\Hospital\PatientAdmission;

use Illuminate\Http\Response;

use App\Http\Requests\Hospital\PatientAdmissionRequest;

use App\Models\Admin\CompanyInfo;

use Illuminate\Support\Facades\DB;

class PatientAdmissionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['list'] = PatientAdmission::with(['patientInfo','doctorInfo','bedInfo'])->get();

		return view('hospital.patient_admission.list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$bed_no = BedNo::with(['bedType'])->where('empty_status',1)->get();

		/* Generate Bed List */
		$data['bed_list'][''] = "Select Bed No";
		foreach($bed_no as $key=>$value):
			$data['bed_list'][$value->id] = $value->bedType->name . ' - ' . $value->name;
		endforeach;

		$data['doctors_list'] = ['Select Doctor Name'] + Doctor::lists('name','id');

		return view('hospital.patient_admission.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( PatientAdmissionRequest $request )
	{
		return DB::transaction(function() use($request)
		{
			$obj = PatientAdmission::create($request->all());

			$bed_info = BedNo::find($obj->bed_id);
			$bed_info->empty_status = 0;
			$bed_info->save();

			return $obj;

		});

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show( PatientAdmission $model)
	{
		$data['admission_info'] = $model;
		$data['company_info'] = CompanyInfo::find(1);

		return view('hospital.patient_admission.report',$data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(PatientAdmission $obj)
	{
		$bed_no = BedNo::all();

		/* Generate Bed List */
		$data['bed_list'][''] = "Select Bed No";
		foreach($bed_no as $key=>$value):
			$data['bed_list'][$value->id] = $value->bedType->name . ' - ' . $value->name;
		endforeach;

		$data['doctors_list'] = Doctor::lists('name','id');
		$data['patient_admission_info'] = $obj;

		return view('hospital.patient_admission.edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(PatientAdmission $obj, PatientAdmissionRequest $request)
	{
		$obj->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}/* end class */
