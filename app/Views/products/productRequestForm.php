<div class="row">
    <form class="col-xs-10 col-xs-offset-1">
        <fieldset col-xs-12>
            <legend>Contact informations</legend>
                <div class="form_group col-xs-6">
                    <label for="firstname">First name</label>
                        <input type="text" id="firstname" class="form-control" name="firstname" placeholder="First name" autofocus/>
                </div>
                <div class="form_group col-xs-6">
                    <label for="lastname">Last name</label>
                        <input type="text" id="lastname" class="form-control" name="lastname" placeholder="Last name"/>
                </div>
                <div class="form_group col-xs-6">
                    <label for="company">Company</label>
                        <input type="text" id="company" class="form-control" name="company" placeholder="Company / Laboratory"/>
                </div>
                <div class="form-group col-xs-6">
                    <label for="country">Country</label>
                        <select name="country" class="form-control" id="country">
                            <option selected disabled>Choose your country</option>
                        </select>
                </div>
                <div class="col-xs-12 form-group"
                    <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" required/>
                </div>
        </fieldset>
        <fieldset col-xs-12>
            <legend>Request</legend>
                <div class="form-group col-xs-6">
                    <label for="laserbeam">Laser beam</label>
                        <input type="number" id="laserbeam" class="form-control" name="spec1" placeholder="Laser beam diameter" min="10" max="100" step="10"/>
                </div>
                <div class="form-group col-xs-6">
                    <label for="laserpower">Laser power</label>
                        <input type="text" id="laserpower" class="form-control" name="spec2" placeholder="Laser power"/>
                </div>
                <div class="form-group col-xs-4">
                    <label for="type1">Type 1</label>
                        <select id="type1" class="form-control" name="spec3">
                            <option selected disabled>Choose from list</option>
                            <option value="cw">CW</option>
                            <option value="pulsed">Pulsed</option>
                        </select>
                </div>
                <div class="form-group col-xs-4">
                    <label for="wavelength">Wavelength</label>
                        <input type="number" id="wavelength" class="form-control" name="spec4" placeholder="Wavelength" min="10" max="100" step="10"/>
                </div>
                <div class="form-group col-xs-4">
                    <label for="type2">Type 2</label>
                        <select id="type2" class="form-control" name="spec5">
                            <option selected disabled>Choose from list</option>
                            <option value="vacuum">Vacuum</option>
                            <option value="atmosphere">Atmosphere</option>
                        </select>
                </div>
        </fieldset>
        <button class="btn btn-primary col-xs-4 col-xs-offset-4">Send</button>
    </form>
        
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="../../public/assets/js/apiCountryRequest.js"></script>

