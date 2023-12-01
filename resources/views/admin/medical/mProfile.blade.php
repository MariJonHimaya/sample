@extends('layouts.default')

@section('content')
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Add Student Medical</h4>
                    <form class="form-sample" action="{{ route('medical.mProfile.store') }}">
                      <p class="card-description"> Personal information </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" >Student ID</label>
                            <div class="col-sm-9">
                              <input type="number" name="student_id" style="background-color: white"class="form-control" placeholder="Student ID" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" class="form-control" style="background-color: white" placeholder="Full Name"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row" >
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input type="date" name="dob" class="form-control text-dark"  placeholder="dd/mm/yyyy" style="background-color: white" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row" >
                            <label class="col-sm-3 col-form-label">Contact Information</label>
                            <div class="col-sm-9">
                              <input type="number" name="contact_info" class="form-control text-dark" placeholder="Contact Information" style="background-color: white" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Insurance Information</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="insurance_information" placeholder="Insurance Information" style="background-color: white">
                              	@if($insurances=App\Models\Insurance::get())
                              		@foreach($insurances as $insurance)
                                		<option value="{{ $insurance->id }}">{{ $insurance->name }}</option>
                                <!-- <option>PAG-IBIG FUND</option>
                                <option>PHILIPPINE HEALTH INSURANCE CORPORATION(PHILHEALTH)</option>
                                <option>SUN LIFE HEALTH CARE INSURANCE</option> -->
                                	@endforeach
                                @endif
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row" >
                            <label class="col-sm-3 col-form-label">Allergies</label>
                            <div class="col-sm-9">
                              <input type="text" name="allergies" class="form-control text-dark" placeholder="Allergies" style="background-color: white" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Emergency Contacts </label>
                            <div class="col-sm-9">
                              <input type="text" name="emergency_contacts" class="form-control" style="background-color: white" placeholder="Emergency Contacts"/>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary me-2">Save</button>
                     	 <button class="btn btn-dark">Cancel</button>
                  		</div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
@endsection()
