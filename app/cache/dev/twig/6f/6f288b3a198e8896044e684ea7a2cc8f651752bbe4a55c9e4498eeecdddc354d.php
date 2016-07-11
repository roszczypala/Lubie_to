<?php

/* AppBundle:Main:index.html.twig */
class __TwigTemplate_22cc2aa5ba0b51afdbd474fccb74e1d7dda80d3f9ebf62a45315e206c3c1698f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Main:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top' => array($this, 'block_top'),
            'middle' => array($this, 'block_middle'),
            'middle1' => array($this, 'block_middle1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a218856089c9fdc449845e8db9a4080696d8b03053ff96b5d4932f686a4d48d0 = $this->env->getExtension("native_profiler");
        $__internal_a218856089c9fdc449845e8db9a4080696d8b03053ff96b5d4932f686a4d48d0->enter($__internal_a218856089c9fdc449845e8db9a4080696d8b03053ff96b5d4932f686a4d48d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a218856089c9fdc449845e8db9a4080696d8b03053ff96b5d4932f686a4d48d0->leave($__internal_a218856089c9fdc449845e8db9a4080696d8b03053ff96b5d4932f686a4d48d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92d082509b6dd79c2e65bfcb80430e3e8a27a103c5c1746a61ddd0b2e06e2287 = $this->env->getExtension("native_profiler");
        $__internal_92d082509b6dd79c2e65bfcb80430e3e8a27a103c5c1746a61ddd0b2e06e2287->enter($__internal_92d082509b6dd79c2e65bfcb80430e3e8a27a103c5c1746a61ddd0b2e06e2287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Let's do it";
        
        $__internal_92d082509b6dd79c2e65bfcb80430e3e8a27a103c5c1746a61ddd0b2e06e2287->leave($__internal_92d082509b6dd79c2e65bfcb80430e3e8a27a103c5c1746a61ddd0b2e06e2287_prof);

    }

    // line 4
    public function block_top($context, array $blocks = array())
    {
        $__internal_d52340a628a94d585686305d84a8667c1ae3f70ac799ea27accaf504fc42dca0 = $this->env->getExtension("native_profiler");
        $__internal_d52340a628a94d585686305d84a8667c1ae3f70ac799ea27accaf504fc42dca0->enter($__internal_d52340a628a94d585686305d84a8667c1ae3f70ac799ea27accaf504fc42dca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        echo " 
    <div class=\"col-md-2\">
    ";
        // line 6
        if ( !(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()))) {
            // line 7
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"Photo\" width=\"200\" height=\"200\" class=\"left-block\"/>
    ";
        }
        // line 9
        echo "    </div>
    <div class=\"col-md-8\">
        <br><br><br><br><br><br>
        <div class=\"user-info\">
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "html", null, true);
        echo "
            <br>
            <div class=\"btn-group\">
                ";
        // line 16
        if ( !(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()))) {
            // line 17
            echo "                    <a class=\"btn btn-custom\" href=\"/photo/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()), "id", array()), "html", null, true);
            echo "/edit\">Update photo</a>
                ";
        } else {
            // line 18
            echo "    
                    <a class=\"btn btn-custom\" href=\"/photo/user/create/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\">Add photo</a>
                ";
        }
        // line 21
        echo "                <a class=\"btn btn-custom\" href=\"/crew/new\">Add group</a>
                <a class=\"btn btn-custom\" href=\"/profile/edit\">Update profile</a>
                <a class=\"btn btn-custom\" href=\"/message\">Messages</a>
                ";
        // line 24
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()) == "Admin")) {
            // line 25
            echo "                    <a class=\"btn btn-custom\" href=\"/admin/index\">Admin panel</a>
                ";
        }
        // line 26
        echo "  
            </div>
        </div>
        
    </div>
";
        
        $__internal_d52340a628a94d585686305d84a8667c1ae3f70ac799ea27accaf504fc42dca0->leave($__internal_d52340a628a94d585686305d84a8667c1ae3f70ac799ea27accaf504fc42dca0_prof);

    }

    // line 33
    public function block_middle($context, array $blocks = array())
    {
        $__internal_fc0d46b6e48b3e2e7dd93469268f8eddb83ff00b98b304a1a011811eb7b25fbb = $this->env->getExtension("native_profiler");
        $__internal_fc0d46b6e48b3e2e7dd93469268f8eddb83ff00b98b304a1a011811eb7b25fbb->enter($__internal_fc0d46b6e48b3e2e7dd93469268f8eddb83ff00b98b304a1a011811eb7b25fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 34
        echo "
   ";
        // line 49
        echo "
    <h3 class=\"text-center\">My groups</h3>
    <div class=\"list-group\">
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crews"]) ? $context["crews"] : $this->getContext($context, "crews")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["crew"]) {
            // line 53
            echo "        <a class=\"list-group-item\" href=\"/crew/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "name", array()), "html", null, true);
            echo "</a>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "  
        <p>No crews yet</p>     
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crew'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>
";
        
        $__internal_fc0d46b6e48b3e2e7dd93469268f8eddb83ff00b98b304a1a011811eb7b25fbb->leave($__internal_fc0d46b6e48b3e2e7dd93469268f8eddb83ff00b98b304a1a011811eb7b25fbb_prof);

    }

    // line 59
    public function block_middle1($context, array $blocks = array())
    {
        $__internal_e16b071aff0d92f3ea63122ca3dd8f322033b1dd754b8fb33cae3d1702a1f105 = $this->env->getExtension("native_profiler");
        $__internal_e16b071aff0d92f3ea63122ca3dd8f322033b1dd754b8fb33cae3d1702a1f105->enter($__internal_e16b071aff0d92f3ea63122ca3dd8f322033b1dd754b8fb33cae3d1702a1f105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle1"));

        echo " 
    <h3 class=\"text-center\">My events</h3>
    <div class=\"list-group\">
    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 63
            echo "        <a class=\"list-group-item\" href=\"/event/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "
            ";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", array()), "Y-m-d H:i"), "html", null, true);
            echo "
        </a>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "  
        <p>No events yet</p>     
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e16b071aff0d92f3ea63122ca3dd8f322033b1dd754b8fb33cae3d1702a1f105->leave($__internal_e16b071aff0d92f3ea63122ca3dd8f322033b1dd754b8fb33cae3d1702a1f105_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 67,  186 => 65,  182 => 64,  177 => 63,  172 => 62,  162 => 59,  154 => 57,  146 => 54,  136 => 53,  131 => 52,  126 => 49,  123 => 34,  117 => 33,  105 => 26,  101 => 25,  99 => 24,  94 => 21,  89 => 19,  86 => 18,  80 => 17,  78 => 16,  72 => 13,  66 => 9,  60 => 7,  58 => 6,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Let's do it{% endblock %}*/
/* {% block top %} */
/*     <div class="col-md-2">*/
/*     {%if user.photo is not null%}*/
/*         <img src="{{user.photo.path}}" alt="Photo" width="200" height="200" class="left-block"/>*/
/*     {% endif %}*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*         <br><br><br><br><br><br>*/
/*         <div class="user-info">*/
/*             {{user.username|upper}}*/
/*             <br>*/
/*             <div class="btn-group">*/
/*                 {%if user.photo is not null%}*/
/*                     <a class="btn btn-custom" href="/photo/{{user.photo.id}}/edit">Update photo</a>*/
/*                 {% else %}    */
/*                     <a class="btn btn-custom" href="/photo/user/create/{{user.id}}">Add photo</a>*/
/*                 {% endif %}*/
/*                 <a class="btn btn-custom" href="/crew/new">Add group</a>*/
/*                 <a class="btn btn-custom" href="/profile/edit">Update profile</a>*/
/*                 <a class="btn btn-custom" href="/message">Messages</a>*/
/*                 {% if user.username == 'Admin' %}*/
/*                     <a class="btn btn-custom" href="/admin/index">Admin panel</a>*/
/*                 {% endif %}  */
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block middle %}*/
/* */
/*    {# <div id="map"></div>*/
/*     <script>*/
/*         function initMap() {*/
/*             var mapDiv = document.getElementById('map');*/
/*             var map = new google.maps.Map(mapDiv, {*/
/*                 center: {lat: {{ user.latitude }}, lng: {{ user.longitude}}},*/
/*                 zoom: 8*/
/*             });*/
/*         */
/*         }*/
/*     </script>*/
/*     <script async defer*/
/*             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXhtL_yLZra6mzoFA7P3thVJyAw7w4vmg&callback=initMap">*/
/*     </script>#}*/
/* */
/*     <h3 class="text-center">My groups</h3>*/
/*     <div class="list-group">*/
/*     {%for crew in crews%}*/
/*         <a class="list-group-item" href="/crew/{{crew.id}}">{{crew.name}}</a>*/
/*     {% else %}  */
/*         <p>No crews yet</p>     */
/*     {%endfor%}*/
/*     </div>*/
/* {% endblock %}*/
/* {% block middle1 %} */
/*     <h3 class="text-center">My events</h3>*/
/*     <div class="list-group">*/
/*     {%for event in events%}*/
/*         <a class="list-group-item" href="/event/{{event.id}}">*/
/*             {{event.name}}*/
/*             {{event.date | date('Y-m-d H:i')}}*/
/*         </a>*/
/*     {% else %}  */
/*         <p>No events yet</p>     */
/*     {%endfor%}*/
/* {% endblock %} */
/*             */
/*         */
