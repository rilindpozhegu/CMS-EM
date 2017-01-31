@extends('website.layouts.plane')

@section('body')
<section class="header-section">
        <div class="container">
            <div class="col-md-5 col-xs-12 header_panel_section">
                <span>Legal And Commercial Solutions For The </span>
                <h4>MARITIME & COMMODITY <br> TRADES</h4>
                <button>More</button>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
<div class="home-backgorund-img">

<!-- Data Table -->
<div class="container data_table1">
    <h3>MAJOR CASUALTIES</h3>
</div>
<section class="data_table">
    <div class="container table-responsive">
        <table id="example" class="cell-border table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Vessel Name/Incident</th>
                <th>Date</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
            </tr>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
            </tr>            
        </tbody>
    </table>
    </div>
</section>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection