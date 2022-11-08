<?php require_once("require/header.php"); ?>
<div class="col-sm-3">
<h1 class="display-6 p-5">Course Information</h1>

<div class="m-3 w-100">
        <select class="form-select w-50" aria-label="Default select example">
          <option selected>Select Course</option>
          <option value="1">PHP Basic</option>
          <option value="2">PHP Advance</option>
          <option value="3">Java Basic</option>
          <option value="4">Java Advance</option>
          <option value="5">Andriod Basic</option>
          <option value="6">Andriod Advance</option>
        </select>
    </div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title fs-4">PHP Basic</h5>
    <h6 class="card-subtitle mb-2 text-muted">Course Teacher</h6>
  	<hr>  
    <p class="card-text fw-bold">Ahmed Raza</p>
    <p class="card-text fw-bold">Shahid Khan</p>
    <p class="card-text fw-bold">Abdul Latif</p>
    <p class="card-text fw-bold">Muhammad Ali</p>
    <p class="card-text fw-bold">Iqra Kanwal</p>
    <p class="card-text fw-bold">Urooj Fatima</p>
    <p class="card-text fw-bold">Inayat Khan</p>
  </div>
</div>
</div>
<div class="col-sm-6">
	<h1 class="fs-5 p-5 text-center">Enrolled Students</h1>
    
	<!-- data Table Record -->
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Home Town</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>John</td>
                <td>tiger@gmail.com</td>
                <td>Male</td>
                <td>06 May 1997</td>
                <td>Agriculure Complex Qasimabad</td>
            </tr>
            <tr>
                <td>Ahmed</td>
                <td>Khan</td>
                <td>khan@gmail.com</td>
                <td>Male</td>
                <td>08 May 1997</td>
                <td>Agriculure Complex Hyderabad</td>
            </tr>
            <tr>
                <td>Sikander</td>
                <td>Samejo</td>
                <td>sikander@gmail.com</td>
                <td>Male</td>
                <td>10 Sep 1980</td>
                <td>GR Mohala Street No.9 Kotri</td>                
            </tr>
            <tr>
                <td>Urooj</td>
                <td>fatima</td>
                <td>urooj@gmail.com</td>
                <td>female</td>
                <td>16 Aug 1980</td>
                <td>Jamshoro</td>
            </tr>
            <tr>
                <td>Shahid</td>
                <td>Sheikh</td>
                <td>shahid@gmail.com</td>
                <td>Male</td>
                <td>20 Sep 1989</td>
                <td>Khanpur</td>
            </tr>
            <tr>
                <td>Asad</td>
                <td>Pathan</td>
                <td>asad90@gmail.com</td>
                <td>Male</td>
                <td>28 Jan 1999</td>
                <td>Bahawalpur</td>
            </tr>
            <tr>
                <td>Asad</td>
                <td>Pathan</td>
                <td>asad90@gmail.com</td>
                <td>Male</td>
                <td>28 Jan 1999</td>
                <td>Bahawalpur</td>
            </tr>
            <tr>
                <td>Asad</td>
                <td>Pathan</td>
                <td>asad90@gmail.com</td>
                <td>Male</td>
                <td>28 Jan 1999</td>
                <td>Bahawalpur</td>
            </tr>
            <tr>
                <td>Shahid</td>
                <td>Sheikh</td>
                <td>shahid@gmail.com</td>
                <td>Male</td>
                <td>20 Sep 1989</td>
                <td>Khanpur</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>

</div>

<?php require_once("require/footer.php"); ?>