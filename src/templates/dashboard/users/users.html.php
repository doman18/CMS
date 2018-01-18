{% include 'dashboard/db-header.html.php' %}
{% include 'dashboard/db-menu.html.php' %}
    <div id="page-wrapper" >
        <div id="page-inner">
            {% include 'alerts.html.php' %}
            <div class="row">
                <div class="col-md-12">
                <h3>Użytkownicy</h3>
                 </div>
                <hr />
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Lista użytkowników użytkownika</h4>
                            <table class="table table-striped">
                                <thead>
                                    <th>#id</th>
                                    <th>login</th>
                                    <th>prawa</th>
                                    <th>status</th>
                                    <th>dodany</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>doman</td>
                                        <td>sadmin</td>
                                        <td>aktywny</td>
                                        <td>2017-07-18</td>
                                        <td><a class="btn btn-default" href="{{ APP_URI }}/users/password/user_id">Zmień hasło</a> <a class="btn btn-primary" href="{{ APP_URI }}/users/edit/user_id">Edytuj</a> <a class="btn btn-warning" href="{{ APP_URI }}/users/status/user_id">Deaktywuj</a> <a class="btn btn-danger" href="dorobić popup lub osobną stronę z potwierdzeniem">Usuń</a></td>
                                    </tr>
                                </tbody>
                              </table>
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Dodaj użytkownika</h4>
                            <form action="" method="POST">
                                <div class="form-group">
                                  <label for="f_login">Login</label>
                                  <input name="f_login" type="text" class="form-control" id="f_login" placeholder="login" required>
                                </div>
                                <div class="form-group">
                                  <label for="f_password">Hasło</label>
                                  <input name="f_password" type="password" class="form-control" id="f_password" placeholder="hasło" required>
                                </div>
                                 <div class="form-group">
                                  <label for="f_password2">Powtórz hasło</label>
                                  <input name="f_password2" type="password" class="form-control" id="f_password2" placeholder="hasło" required>
                                </div>
                                <div class="form-group">
                                    <label for="f_role">Uprawnienia</label>
                                <select class="form-control" id="f_role" name="f_role">
                                    <option selected="selected" value="">Edytor</option>
                                    <option value="">Admin</option>
                                </select>
                                </div>
                                <div class="form-group">
                                 <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Dodaj użytkownika</button>
                                </div>
                           </form>
                        </div>
                  </div>
                </div>
                        
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
{% include 'dashboard/db-footer.html.php' %}