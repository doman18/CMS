            {% if alerts %}
                {% for alert in alerts %}
                   <div class="row">
                        <div class="col-lg-12 ">
                            <div class="alert alert-{{ alert.type|e }} alert-dismissable fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 {{ alert.msg|e }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
