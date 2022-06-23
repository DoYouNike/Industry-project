<div class="col-md-10 col-lg-8 col-xl-8 mx-auto">
    <form action="/2019-projects/team4/results.php" method="GET">
        <div class="form-row">
            <div class="form-group col-md-9" id="demo">
                <input required type="text" placeholder="Enter search term..." name="Search" class="form-control my-2" id="Search" oninput="searchFunc()">
            </div>
            <div class="form-group col-md-3">
                <select required class="form-control my-2" name="state">
                    <option value="" disabled selected hidden>Select State</option>
                    <option value="">ANY</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <input type="text" placeholder="Your Zip Code" name="zipCode"
                       class="form-control my-2">
            </div>
            <div class="form-group col-md-3">
                <select required class="form-control my-2" name="price">
                    <option value="" disabled selected hidden>Max Cost</option>
                    <option value="">ANY</option>
                    <option value="3000"><$3,000</option>
                    <option value="5000"><$5,000</option>
                    <option value="10000"><$10,000</option>
                    <option value="20000"><$20,000</option>
                    <option value="30000"><$30,000</option>
                    <option value="50000"><$50,000</option>
                    <option value="100000"><$100,000</option>
                    <option value="500000"><$500,000</option>
                </select>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-block btn-lg btn-success" id ="submitB">Search</button>
            </div>
        </div>
    </form>
</div>