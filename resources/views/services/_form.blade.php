
  {{-- TOKEN --}}
  @csrf

  <div class="card">
      <div class="card-body">
          <fieldset>
              <legend>Identificação</legend>
              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="name">Name</label>
                          {{-- OLD() to keep input after --}}
                          <input value="{{ old('name', $service->name ?? '') }}" type="input" required class="form-control" name="name" id="name"  placeholder="Name do serviço">
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group"> 
                          <label for="icon">Ícone</label>
                          <select name="icon" id="icon" class="form-control"> 
                            <option value="">Selecione um ícone</option>
                            <option value="twf-cleaning-1" {{ old('icon', $service->icon ?? '') == 'twf-cleaning-1' ? 'selected' : ''}}>Ícone 1</option>
                            <option value="twf-cleaning-2" {{ old('icon', $service->icon ?? '') == 'twf-cleaning-2' ? 'selected' : ''}}>Ícone 2</option>
                            <option value="twf-cleaning-3" {{ old('icon', $service->icon ?? '') == 'twf-cleaning-3' ? 'selected' : ''}}>Ícone 3</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="position">Posição na plataforma</label>
                          <input value="{{ old('position', $service->position ?? '') }}" type="input" class="form-control" name="position" data-mask="00" id="position" required placeholder="Posição do serviço na plataforma">
                      </div>
                  </div>
              </div>
          </fieldset>

          <fieldset>
              <legend>Globais</legend>
              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="value_min">Valor Mínimo</label>
                          <input value="{{ old('value_min', $service->value_min ?? '') }}" type="input" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" name="value_min" id="value_min" required placeholder="Valor mínimo do serviço">
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="hours_min">Quantidade Mínima de horas</label>
                          <input value="{{ old('hours_min', $service->hours_min ?? '') }}" type="input" class="form-control" name="hours_min" data-mask="0" id="hours_min" required placeholder="Quantidade mínima de horas">
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="percent">Percent de Comissão</label>
                          <input value="{{ old('percent', $service->percent ?? '') }}" type="input" class="form-control" name="percent" data-mask="00" id="percent" required placeholder="percent de comissão no serviço">
                      </div>
                  </div>
              </div>
          </fieldset>

          <fieldset>
              <legend>Cômodos</legend>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="value_bedroom">Valor por Quarto</label>
                          <input value="{{ old('value_bedroom', $service->value_bedroom ?? '') }}" type="input" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" name="value_bedroom" id="value_bedroom" required placeholder="Valor por quarto">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="hours_bedroom">Quantidade de Horas por quarto</label>
                          <input value="{{ old('hours_bedroom', $service->hours_bedroom ?? '') }}" type="input" class="form-control" data-mask="0" name="hours_bedroom" id="hours_bedroom" required placeholder="Quantidade horas por quarto">
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="value_living_room">Valor por sala</label>
                          <input value="{{ old('value_living_room', $service->value_living_room ?? '') }}" type="input" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" name="value_living_room" id="value_living_room" required placeholder="Valor por sala">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="hours_living_room">Quantidade de horas por sala</label>
                          <input value="{{ old('hours_living_room', $service->hours_living_room ?? '') }}" type="input" class="form-control" data-mask="0" name="hours_living_room" id="hours_living_room" required placeholder="Quantidade horas por sala">
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="value_bathroom">Valor por banheiro</label>
                          <input value="{{ old('value_bathroom', $service->value_bathroom ?? '') }}" type="input" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" name="value_bathroom" id="value_bathroom" required placeholder="Valor por banheiro">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="hours_bathroom">Quantidade de horas por banheiro</label>
                          <input value="{{ old('hours_bathroom', $service->hours_bathroom ?? '') }}" type="input" class="form-control" data-mask="0" name="hours_bathroom" id="hours_bathroom" required placeholder="Quantidade horas por banheiro">
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="value_kitchen">Valor por cozinha</label>
                          <input value="{{ old('value_kitchen', $service->value_kitchen ?? '') }}" type="input" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" name="value_kitchen" id="value_kitchen" required placeholder="Valor por cozinha">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="hours_kitchen">Quantidade de horas por cozinha</label>
                          <input value="{{ old('hours_kitchen', $service->hours_kitchen ?? '') }}" type="input" class="form-control" data-mask="0" name="hours_kitchen" id="hours_kitchen" required placeholder="Quantidade horas por cozinha">
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="value_yard">Valor por quintal</label>
                          <input value="{{ old('value_yard', $service->value_yard ?? '') }}" type="input" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" name="value_yard" id="value_yard" required placeholder="Valor por quintal">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="hours_yard">Quantidade de horas por quintal</label>
                          <input value="{{ old('hours_yard', $service->hours_yard ?? '') }}" type="input" class="form-control" data-mask="0" name="hours_yard" id="hours_yard" required placeholder="Quantidade horas por quintal">
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="value_others">Valor por outros tipos de cômodos</label>
                          <input value="{{ old('value_others', $service->value_others ?? '') }}" type="input" class="form-control" data-mask="#.##0,00" data-mask-reverse="true" name="value_others" id="value_others" required placeholder="Valor por outros">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="hours_others">Quantidade de horas por outros tipos de cômodos</label>
                          <input value="{{ old('hours_others', $service->hours_others ?? '') }}" type="input" class="form-control" data-mask="0" name="hours_others" id="hours_others" required placeholder="Quantidade horas por outros">
                      </div>
                  </div>
              </div>
          </fieldset>

          <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                      <button class="btn btn-primary" type="submit">Salvar</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
