@extends('layouts.adminhead')

@section('admin')




        <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Wizard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appartement en vente</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Basic Form Example</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="#" class="m-t-40">
                            <div>
                                <h3>Description de l'annonce</h3>
                                <section>
                                   Form Elements
                                    
                                </section>
                                <h3>Information de base sur l'annonce</h3>
                                <section>
                                    <label for="name">First name *</label>
                                    <input id="name" name="name" type="text" class="required form-control">
                                    <label for="surname">Last name *</label>
                                    <input id="surname" name="surname" type="text" class="required form-control">
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="text" class="required email form-control">
                                    <label for="address">Address</label>
                                    <input id="address" name="address" type="text" class=" form-control">
                                    <p>(*) Mandatory</p>
                                </section>
                                <h3>Emplacement de l'offre</h3>
                                <section>
                                    <ul>
                                        <li>Foo</li>
                                        <li>Bar</li>
                                        <li>Foobar</li>
                                    </ul>
                                </section>
                                <h3>Photos et Fin</h3>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </section>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->

            @endsection