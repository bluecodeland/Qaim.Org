<label class="form-check-label" for="remember">
                                        {{ __('مرا به خاطر داشته باش') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>