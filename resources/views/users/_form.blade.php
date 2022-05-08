
  {{-- TOKEN --}}
  @csrf

  <div class="card">
      <div class="card-body">
              

          <fieldset>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">User Name</label>
                          <input value="{{ old('name', $user->name ?? '') }}" type="input" class="form-control" name="name" id="name" required placeholder="User name here">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input value="{{ old('email', $user->email ?? '') }}" type="email" class="form-control" name="email" id="email" required placeholder="email@example.com">
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input value="{{ old('password',  '') }}" type="password" class="form-control" name="password" id="password" required placeholder="*******">
                      </div>
                  </div>
                  {{-- {field}_confirmed  => LARAVEL RULE--}}
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="password_confirmation">Verify Password</label>
                          <input value="{{ old('password_confirmation', '') }}" type="password" class="form-control" name="password_confirmation" id="password_confirmation" required placeholder="*******">
                      </div>
                  </div>
              </div>
          </fieldset>

          <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                      <button class="btn btn-primary" type="submit">Save</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
