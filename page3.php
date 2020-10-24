    <?php include('include/header.php');?>

    <div class="pic"> 
        <div class="text-center">
        <img src="form.jpg" class="rounded-pill" alt="Table" height="300px" width="auto" style="margin-top: 50px;">        
        </div>
    </div>

    <div class="space"></div>

    <div class="container">
      <div class="container card shadown" style="background-color: #747474;">
        <form method="post" action="action_page.php">
            <div class="for form-group">
                <label for="country"><strong>Select a country</strong></label>
                <select id="country" class="form-control" name="country">
                    <option value="empty">---</option>
                    <option value="Italy">Italy</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Germany">Germany</option>
                    <option value="Greece">Greece</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Spain">Spain</option>
                    <option value="Sweden">Sweden</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Austria">Austria</option>
                    <option value="Poland">Poland</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Ok">
            </div>
        </form>
      </div>
    </div>

    <div class="space"></div>

    <?php include('include/footer.php');?> 