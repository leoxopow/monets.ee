<div class="container">
    <div class="row">
        <div class="col-xs-12">
            {{ var_dump(Session.get('profile')) }}
            <h1>Регистрация</h1>
            {{ Form.open() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email" value="{{Input.get('email')}}">
                {% if (Theme.place('error').first('email')) %}
                <span class="help-block error">{{ Theme.place('error').first('email') }}</span>
                {% endif %}
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль">
                {% if (Theme.place('error').first('password')) %}
                <span class="help-block error">{{ Theme.place('error').first('password') }}</span>
                {% endif %}
            </div>
            <div class="form-group">
                <label for="passwordc">Подтверждение пароля</label>
                <input type="password" name="password_confirmation" class="form-control" id="passwordc" placeholder="Введите пароль">
                {% if (Theme.place('error').first('password_confirmation')) %}
                <span class="help-block error">{{ Theme.place('error').first('password_confirmation') }}</span>
                {% endif %}
            </div>
            <button type="submit" class="btn btn-default">Регистрация</button>
            {{ Form.close() }}
        </div>
    </div>
</div>