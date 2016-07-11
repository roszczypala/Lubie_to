<?php

/* AppBundle:Main:event.html.twig */
class __TwigTemplate_4fe814a1138155242f2d0dd45ce0d8d65ee81c32d6a4af1fc5d6c6c36dd1017d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Main:event.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top' => array($this, 'block_top'),
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cc9850cdc9c745b60c9491c7704021f9f76fec06c30b699311499046cfd74be = $this->env->getExtension("native_profiler");
        $__internal_6cc9850cdc9c745b60c9491c7704021f9f76fec06c30b699311499046cfd74be->enter($__internal_6cc9850cdc9c745b60c9491c7704021f9f76fec06c30b699311499046cfd74be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc9850cdc9c745b60c9491c7704021f9f76fec06c30b699311499046cfd74be->leave($__internal_6cc9850cdc9c745b60c9491c7704021f9f76fec06c30b699311499046cfd74be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74ddcc5bb6aaf14323dcdd9b4cd5d8ed582dce562e9d87301e4ae316f3d6f328 = $this->env->getExtension("native_profiler");
        $__internal_74ddcc5bb6aaf14323dcdd9b4cd5d8ed582dce562e9d87301e4ae316f3d6f328->enter($__internal_74ddcc5bb6aaf14323dcdd9b4cd5d8ed582dce562e9d87301e4ae316f3d6f328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        
        $__internal_74ddcc5bb6aaf14323dcdd9b4cd5d8ed582dce562e9d87301e4ae316f3d6f328->leave($__internal_74ddcc5bb6aaf14323dcdd9b4cd5d8ed582dce562e9d87301e4ae316f3d6f328_prof);

    }

    // line 5
    public function block_top($context, array $blocks = array())
    {
        $__internal_f0d40638a01b291cc8498f053802940be7819ad6be173c66ba763820162d716f = $this->env->getExtension("native_profiler");
        $__internal_f0d40638a01b291cc8498f053802940be7819ad6be173c66ba763820162d716f->enter($__internal_f0d40638a01b291cc8498f053802940be7819ad6be173c66ba763820162d716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        echo " 
    <div class=\"col-md-2\">
    ";
        // line 7
        if ( !(null === $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "photo", array()))) {
            // line 8
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"Photo\" width=\"200\" height=\"200\" class=\"left-block\"/>
    ";
        }
        // line 10
        echo "    </div>
    <div class=\"col-md-8\">
        <br><br><br><br><br><br>
        <div class=\"user-info\">
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array())), "html", null, true);
        echo "
            <br>
            <span class=\"small\">";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date", array()), "Y-m-d H:i"), "html", null, true);
        echo "</span>
            <br>           
            <div class=\"btn-group\">     
                <a class=\"btn btn-custom\" href=\"/crew/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "crew", array()), "id", array()), "html", null, true);
        echo "\">Return to group site</a>  
                ";
        // line 20
        if (twig_in_filter((isset($context["loggedUser"]) ? $context["loggedUser"] : $this->getContext($context, "loggedUser")), $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "users", array()))) {
            // line 21
            echo "                    ";
            if ( !(null === $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "photo", array()))) {
                // line 22
                echo "                        <a class=\"btn btn-custom\" href=\"/photo/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "photo", array()), "id", array()), "html", null, true);
                echo "/edit\">Update photo</a>
                    ";
            } else {
                // line 23
                echo " 
                        <a class=\"btn btn-custom\" href=\"/photo/event/create/";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
                echo "\">Add photo</a>
                    ";
            }
            // line 26
            echo "                ";
        }
        // line 27
        echo "                
                ";
        // line 28
        if (($this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : $this->getContext($context, "loggedUser")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventAdmin", array()), "id", array()))) {
            // line 29
            echo "                    <a class=\"btn btn-custom\" href=\"/event/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
            echo "/edit\">Edit event info</a>
                ";
        }
        // line 30
        echo "  
            </div>
        </div>
        
    </div>
";
        
        $__internal_f0d40638a01b291cc8498f053802940be7819ad6be173c66ba763820162d716f->leave($__internal_f0d40638a01b291cc8498f053802940be7819ad6be173c66ba763820162d716f_prof);

    }

    // line 37
    public function block_middle($context, array $blocks = array())
    {
        $__internal_27b002c4684c26840618250b907f8ce02353175f9124b05a29f0a67d313e581c = $this->env->getExtension("native_profiler");
        $__internal_27b002c4684c26840618250b907f8ce02353175f9124b05a29f0a67d313e581c->enter($__internal_27b002c4684c26840618250b907f8ce02353175f9124b05a29f0a67d313e581c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 38
        echo "    <p class=\"well\">
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "
        <br>
        <strong>Event admin: <a class=\"link\" href=\"/user/";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventAdmin", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventAdmin", array()), "username", array()), "html", null, true);
        echo "</a></strong>
    </p>
    ";
        // line 43
        if (!twig_in_filter((isset($context["loggedUser"]) ? $context["loggedUser"] : $this->getContext($context, "loggedUser")), $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "users", array()))) {
            // line 44
            echo "        <a class=\"btn btn-custom btn-lg\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_event_addusertoevent", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
            echo "\">JOIN</a>
    ";
        } else {
            // line 46
            echo "        <a class=\"btn btn-custom btn-lg\" href=\"/event/removeUser/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
            echo "\">Leave</a>
    ";
        }
        // line 48
        echo "    <div id=\"map\" class=\"center-block\"></div>
    <script>
         function initMap() {
            var mapDiv = document.getElementById('map');
            var myLatLng = {lat: ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "latitude", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "longitude", array()), "html", null, true);
        echo "};

            var map = new google.maps.Map(mapDiv, {
                center: myLatLng,
                zoom: 16
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: \"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "street", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "streetNumber", array()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "postcode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "city", array()), "html", null, true);
        echo "\"
            });
        }
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBXhtL_yLZra6mzoFA7P3thVJyAw7w4vmg&callback=initMap\">
    </script>
    <h4>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "city", array()), "html", null, true);
        echo ", ul. ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "street", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "streetNumber", array()), "html", null, true);
        echo "/";
        if ( !(null === $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "flatNumber", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "flatNumber", array()), "html", null, true);
        }
        echo "</h4>
    
    <h3>Who joined</h3>
    <div class=\"list-group\">
    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 73
            echo "        <strong><a class=\"list-group-item\" href=\"/user/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></strong>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "  
        <p>Noone is comming for now</p>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </div>
    
    ";
        // line 79
        if (twig_in_filter((isset($context["loggedUser"]) ? $context["loggedUser"] : $this->getContext($context, "loggedUser")), $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "users", array()))) {
            // line 80
            echo "        <h3>Leave a comment</h3>
        <p>";
            // line 81
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form');
            echo "</p>
    ";
        } else {
            // line 83
            echo "       <h3>Comments</h3> 
    ";
        }
        // line 85
        echo "    <ul class=\"list-group\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 87
            echo "            <li class=\"list-group-item\">
                <p class=\"list-group-item-heading\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "<p> 
                <p class=\"list-group-item-text\"><strong> ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong> <span class=\"small\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span></p>
            </li>    
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            echo "  
            <p>No comments</p>        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    </ul>
";
        
        $__internal_27b002c4684c26840618250b907f8ce02353175f9124b05a29f0a67d313e581c->leave($__internal_27b002c4684c26840618250b907f8ce02353175f9124b05a29f0a67d313e581c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Main:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 94,  285 => 91,  275 => 89,  271 => 88,  268 => 87,  263 => 86,  260 => 85,  256 => 83,  251 => 81,  248 => 80,  246 => 79,  242 => 77,  234 => 74,  224 => 73,  219 => 72,  204 => 68,  186 => 61,  172 => 52,  166 => 48,  160 => 46,  154 => 44,  152 => 43,  145 => 41,  140 => 39,  137 => 38,  131 => 37,  119 => 30,  113 => 29,  111 => 28,  108 => 27,  105 => 26,  100 => 24,  97 => 23,  91 => 22,  88 => 21,  86 => 20,  82 => 19,  76 => 16,  71 => 14,  65 => 10,  59 => 8,  57 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}{{event.name}}{% endblock %}*/
/* */
/* {% block top %} */
/*     <div class="col-md-2">*/
/*     {%if event.photo is not null%}*/
/*         <img src="{{event.photo.path}}" alt="Photo" width="200" height="200" class="left-block"/>*/
/*     {% endif %}*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*         <br><br><br><br><br><br>*/
/*         <div class="user-info">*/
/*             {{event.name|upper}}*/
/*             <br>*/
/*             <span class="small">{{event.date | date('Y-m-d H:i')}}</span>*/
/*             <br>           */
/*             <div class="btn-group">     */
/*                 <a class="btn btn-custom" href="/crew/{{event.crew.id}}">Return to group site</a>  */
/*                 {% if loggedUser in event.users %}*/
/*                     {%if event.photo is not null%}*/
/*                         <a class="btn btn-custom" href="/photo/{{event.photo.id}}/edit">Update photo</a>*/
/*                     {% else %} */
/*                         <a class="btn btn-custom" href="/photo/event/create/{{event.id}}">Add photo</a>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*                 */
/*                 {% if loggedUser.id == event.eventAdmin.id %}*/
/*                     <a class="btn btn-custom" href="/event/{{event.id}}/edit">Edit event info</a>*/
/*                 {% endif %}  */
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/* {% endblock %} */
/* */
/* {% block middle %}*/
/*     <p class="well">*/
/*         {{event.description}}*/
/*         <br>*/
/*         <strong>Event admin: <a class="link" href="/user/{{event.eventAdmin.id}}">{{event.eventAdmin.username}}</a></strong>*/
/*     </p>*/
/*     {% if loggedUser not in event.users %}*/
/*         <a class="btn btn-custom btn-lg" href="{{ path('app_event_addusertoevent', { 'id': event.id }) }}">JOIN</a>*/
/*     {% else %}*/
/*         <a class="btn btn-custom btn-lg" href="/event/removeUser/{{event.id}}">Leave</a>*/
/*     {% endif %}*/
/*     <div id="map" class="center-block"></div>*/
/*     <script>*/
/*          function initMap() {*/
/*             var mapDiv = document.getElementById('map');*/
/*             var myLatLng = {lat: {{ event.latitude }}, lng: {{ event.longitude}}};*/
/* */
/*             var map = new google.maps.Map(mapDiv, {*/
/*                 center: myLatLng,*/
/*                 zoom: 16*/
/*             });*/
/*             var marker = new google.maps.Marker({*/
/*                 position: myLatLng,*/
/*                 map: map,*/
/*                 title: "{{ event.name }}\n{{ event.street }} {{ event.streetNumber }}\n{{ event.postcode }} {{ event.city }}"*/
/*             });*/
/*         }*/
/*     </script>*/
/*     <script async defer*/
/*             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXhtL_yLZra6mzoFA7P3thVJyAw7w4vmg&callback=initMap">*/
/*     </script>*/
/*     <h4>{{event.city}}, ul. {{event.street}} {{event.streetNumber}}/{% if event.flatNumber is not null %}{{event.flatNumber}}{% endif %}</h4>*/
/*     */
/*     <h3>Who joined</h3>*/
/*     <div class="list-group">*/
/*     {%for user in users%}*/
/*         <strong><a class="list-group-item" href="/user/{{user.id}}">{{user.username}}</a></strong>*/
/*     {% else %}  */
/*         <p>Noone is comming for now</p>  */
/*     {%endfor%}*/
/*     </div>*/
/*     */
/*     {% if loggedUser in event.users %}*/
/*         <h3>Leave a comment</h3>*/
/*         <p>{{form(comment_form)}}</p>*/
/*     {% else %}*/
/*        <h3>Comments</h3> */
/*     {% endif %}*/
/*     <ul class="list-group">*/
/*         {% for comment in event.comments %}*/
/*             <li class="list-group-item">*/
/*                 <p class="list-group-item-heading">{{comment.text}}<p> */
/*                 <p class="list-group-item-text"><strong> {{comment.user.username}}</strong> <span class="small">{{comment.date|date('Y-m-d H:i:s')}}</span></p>*/
/*             </li>    */
/*         {% else %}  */
/*             <p>No comments</p>        */
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* */
