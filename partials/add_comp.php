<div id="Popup" class="popup">
    <div class="form_wrapper">
        <span class="close" id="closeButton">&times;</span>
            <h2><center>Add Upcoming Company</center></h2>
            <form action="Add_comp.php" method="post" class="form">
                <div class="form_row">
                    <div class="form_column">
                <div class="form-control">
                    <input type="text" name="company_name" required>
                    <label>Company Name</label>
                </div>
                <div class="form-control">
                    <input type="text" name="position" required>
                    <label>Position</label>
                </div>
                <div class="form-control">
                    <input type="text" name="openings" required>
                    <label>Number of Openings</label>
                </div>
                <div class="form-control">
                    <input type="date" name="start_date" required>
                    <label>Start Date</label>
                </div>
                <div class="form-control">
                    <input type="date" name="last_date" required>
                    <label>Last Date</label>
                </div>
                </div>
                <div class="form_column">
                <div class="form-control">
                    <input type="text" name="location" required>
                    <label>Location</label>
                </div>
                <div class="form-control">
                    <input type="text" name="eligibility_cgpa" required>
                    <label>Eligible CGPA</label>
                </div>
                <div class="form-control">
                    <input type="text" name="eligibility_percentage_10th" required>
                    <label>Eligible 10th %age</label>
                </div>
                <div class="form-control">
                    <input type="text" name="eligibility_percentage_12th" required>
                    <label>Eligible 12th %age</label>
                </div>
                <div class="form-control">
                    <input type="text" name="eligibility_backlogs" required>
                    <label>Eligible Backlogs</label>
                </div>
                </div>
                </div>
                <div class="form-control">
                    <label class="textarea_lable">Description</label><br>
                    <textarea id="companyDescription" name="companyDescription"></textarea>
                </div>
            <button type="submit" name="add_company">Add Company</button>
            </form>
        </div>
    </div>
</div>