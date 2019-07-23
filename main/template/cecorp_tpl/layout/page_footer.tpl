<footer class="footer">
    <div class"footer-top">
        <div class="container">
            {% if plugin_pre_footer is not null %}
                <div id="plugin_pre_footer">
                    {{ plugin_pre_footer }}
                </div>
            {% endif %}
            <section class="sub-footer">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        {% if session_teachers is not null %}
                        <div class="session-teachers">
                            {{ session_teachers }}
                        </div>
                        {% endif %}
                        {% if teachers is not null %}
                        <div class="teachers">
                            {{ teachers }}
                        </div>
                        {% endif %}
                        {% if plugin_footer_left is not null %}
                        <div id="plugin_footer_left">
                            {{ plugin_footer_left }}
                        </div>
                        {% endif %}
                    </div>
                    <div class="col-xs-12 col-md-4">
                        {% if plugin_footer_center is not null %}
                            <div id="plugin_footer_center">
                                {{ plugin_footer_center }}
                            </div>
                        {% endif %}
                    </div>
                    <div class="col-xs-12 col-md-4 text-right" style="position:relative;">
                        {% if administrator_name is not null %}
                            <div class="administrator-name">
                                {{ administrator_name }}
                            </div>
                        {% endif %}
                        
                        {% if plugin_footer_right is not null %}
                            <div id="plugin_footer_right">
                                {{ plugin_footer_right }}
                            </div>
                        {% endif %}
                    </div>
                </div>
                {% if footer_extra_content  %}
                    {{ footer_extra_content }}
                {% endif %}
            </section>
        </div>
    </div>
</footer>
<div class="damke_footer-bottom-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="credits">
                        <div class="copyright">
                            &copy; 2019 CECORP &minus; Todos los derechos reservados
                        </div><!-- /.copyright -->
                        <div class="scala">
                            Developed with <span class="heart-scala">♥</span> by <a href="https://scala.pe" rel="nofollow">Scala</a>
                        </div><!-- /.scala -->
                    </div><!-- /.credits -->

                </div>
            </div>
        </div>
</div>

{{ execution_stats }}