@extends('layouts.adminhead')

@section('admin')
 <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Static Table With Checkboxes</h5>
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox m-b-20">
                                                        <input type="checkbox" id="mainCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <th scope="col">Rendering engine</th>
                                                <th scope="col">Browser</th>
                                                <th scope="col">Platform(s)</th>
                                                <th scope="col">Engine version</th>
                                            </tr>
                                        </thead>
                                        <tbody class="customtable">
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.0</td>
                                                <td>Win 95+</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.0</td>
                                                <td>Win 95+</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.5</td>
                                                <td>Win 95+</td>
                                                <td>5.5</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>Trident</td>
                                                <td>Internet Explorer 6</td>
                                                <td>Win 98+</td>
                                                <td>6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>







@endsection