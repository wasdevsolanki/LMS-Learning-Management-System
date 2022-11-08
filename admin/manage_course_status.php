<?php require_once("require/header.php"); ?>

<div class="col-sm-9">
<h1 class="display-6 p-5 text-center">Active / In-Active Course</h1>
<table class="table table-hover">
  	<thead>
            <tr>     	
                <th>#</th>
                <th>Course Title</th>
                <th>Enrolled Students</th>
                <th>Start Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PHP Basic</td>
                <td>52</td>
                <td>06 May 2021</td>
                <td>Active</td>
                <td>
                	<a href="#" class="btn bg-success text-light rounded-pill">Active</a>
                	<a href="#" class="btn bg-success text-light rounded-pill bg-danger">In-Active</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>PHP Advance</td>
                <td>35</td>
                <td>07 Aug 2021</td>
                <td>Active</td>
                <td>
                	<a href="#" class="btn bg-success text-light rounded-pill">Active</a>
                	<a href="#" class="btn bg-success text-light rounded-pill bg-danger">In-Active</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Java Basic</td>
                <td>72</td>
                <td>10 June 2021</td>
                <td>In-Active</td>
                <td>
                	<a href="#" class="btn bg-success text-light rounded-pill">Active</a>
                	<a href="#" class="btn bg-success text-light rounded-pill bg-danger">In-Active</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Java Advance</td>
                <td>52</td>
                <td>22 Jan 2021</td>
                <td>In-Active</td>
                <td>
                	<a href="#" class="btn bg-success text-light rounded-pill">Active</a>
                	<a href="#" class="btn bg-success text-light rounded-pill bg-danger">In-Active</a>
                </td>
            </tr>
           </tbody>
</table>
</div>


<?php require_once("require/footer.php"); ?>