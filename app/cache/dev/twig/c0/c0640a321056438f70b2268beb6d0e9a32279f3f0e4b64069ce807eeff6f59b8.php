<?php

/* AppBundle:Main:crew.html.twig */
class __TwigTemplate_0d3ce50f5828312ef92adbcb925cdfe2de6c082de0941865613c50a09e8185ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Main:crew.html.twig", 1);
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
        $__internal_30e59f23d134e4e04c97cc2ee518d112185abf56c33e984daaf45713a1890eff = $this->env->getExtension("native_profiler");
        $__internal_30e59f23d134e4e04c97cc2ee518d112185abf56c33e984daaf45713a1890eff->enter($__internal_30e59f23d134e4e04c97cc2ee518d112185abf56c33e984daaf45713a1890eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:crew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e59f23d134e4e04c97cc2ee518d112185abf56c33e984daaf45713a1890eff->leave($__internal_30e59f23d134e4e04c97cc2ee518d112185abf56c33e984daaf45713a1890eff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6caace9485aa397412a6c8d7696eb1648404b37593939e59be40747b3b9c039e = $this->env->getExtension("native_profiler");
        $__internal_6caace9485aa397412a6c8d7696eb1648404b37593939e59be40747b3b9c039e->enter($__internal_6caace9485aa397412a6c8d7696eb1648404b37593939e59be40747b3b9c039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "name", array()), "html", null, true);
        
        $__internal_6caace9485aa397412a6c8d7696eb1648404b37593939e59be40747b3b9c039e->leave($__internal_6caace9485aa397412a6c8d7696eb1648404b37593939e59be40747b3b9c039e_prof);

    }

    // line 5
    public function block_top($context, array $blocks = array())
    {
        $__internal_c73a06d1018e890ab2dab9fc798844adbecd583cf687feff31b7bbaaddfbacbe = $this->env->getExtension("native_profiler");
        $__internal_c73a06d1018e890ab2dab9fc798844adbecd583cf687feff31b7bbaaddfbacbe->enter($__internal_c73a06d1018e890ab2dab9fc798844adbecd583cf687feff31b7bbaaddfbacbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 6
        echo "    <div class=\"col-md-2\">
    ";
        // line 7
        if ( !(null === $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "photo", array()))) {
            // line 8
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "photo", array()), "path", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "name", array())), "html", null, true);
        echo "
            <br>
            <div class=\"btn-group\">
                ";
        // line 17
        if (twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "users", array()))) {
            // line 18
            echo "                    ";
            if ( !(null === $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "photo", array()))) {
                // line 19
                echo "                        <a class=\"btn btn-custom\" href=\"/photo/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "photo", array()), "id", array()), "html", null, true);
                echo "/edit\">Update photo</a>
                    ";
            } else {
                // line 20
                echo " 
                        <a class=\"btn btn-custom\" href=\"/photo/crew/create/";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "id", array()), "html", null, true);
                echo "\">Add photo</a>
                    ";
            }
            // line 23
            echo "                ";
        }
        // line 24
        echo "                
                ";
        // line 25
        if (twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "users", array()))) {
            // line 26
            echo "                    <a class=\"btn btn-custom\" href=\"/event/create/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "id", array()), "html", null, true);
            echo "\">Add event</a>
                ";
        }
        // line 28
        echo "                ";
        // line 29
        echo "            </div>
        </div>
        
    </div>
";
        
        $__internal_c73a06d1018e890ab2dab9fc798844adbecd583cf687feff31b7bbaaddfbacbe->leave($__internal_c73a06d1018e890ab2dab9fc798844adbecd583cf687feff31b7bbaaddfbacbe_prof);

    }

    // line 35
    public function block_middle($context, array $blocks = array())
    {
        $__internal_51f2e3d140f72eb27a71073854d4095d3b608f2618fd3bb57542bf5b278981eb = $this->env->getExtension("native_profiler");
        $__internal_51f2e3d140f72eb27a71073854d4095d3b608f2618fd3bb57542bf5b278981eb->enter($__internal_51f2e3d140f72eb27a71073854d4095d3b608f2618fd3bb57542bf5b278981eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        echo " 
    <p class=\" well\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "description", array()), "html", null, true);
        echo "</p>
    <div class=\"text-center\">
    ";
        // line 38
        if (!twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "users", array()))) {
            // line 39
            echo "        <a class=\"btn btn-lg btn-custom\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_crew_addusertocrew", array("id" => $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "id", array()))), "html", null, true);
            echo "\">JOIN</a>
    ";
        } else {
            // line 41
            echo "        <a class=\"btn btn-lg btn-custom\" href=\"/crew/removeUser/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crew"]) ? $context["crew"] : $this->getContext($context, "crew")), "id", array()), "html", null, true);
            echo "\">Leave</a>
    ";
        }
        // line 43
        echo "    </div>
    <h2>Our events</h2>
    <div class=\"list-group\">
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 47
            echo "            <a class=\"list-group-item\" href=\"/event/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\">
                <strong>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</strong>
                ";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", array()), "Y-m-d H:i"), "html", null, true);
            echo "
            </a>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "  
            <p>No events yet</p> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
";
        
        $__internal_51f2e3d140f72eb27a71073854d4095d3b608f2618fd3bb57542bf5b278981eb->leave($__internal_51f2e3d140f72eb27a71073854d4095d3b608f2618fd3bb57542bf5b278981eb_prof);

    }

    // line 56
    public function block_middle1($context, array $blocks = array())
    {
        $__internal_476ac0fa7b6e8cf6a17f43033a3ae21e75f8d92951ecf0993600e1a341d79ff4 = $this->env->getExtension("native_profiler");
        $__internal_476ac0fa7b6e8cf6a17f43033a3ae21e75f8d92951ecf0993600e1a341d79ff4->enter($__internal_476ac0fa7b6e8cf6a17f43033a3ae21e75f8d92951ecf0993600e1a341d79ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle1"));

        echo "     
    <h2>Our members</h2>
    <div class=\"list-group\">
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 60
            echo "        <a class=\"list-group-item\" href=\"/user/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo "</a>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "  
        <p>No members yet</p> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </div>
";
        
        $__internal_476ac0fa7b6e8cf6a17f43033a3ae21e75f8d92951ecf0993600e1a341d79ff4->leave($__internal_476ac0fa7b6e8cf6a17f43033a3ae21e75f8d92951ecf0993600e1a341d79ff4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Main:crew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 64,  219 => 61,  209 => 60,  204 => 59,  194 => 56,  186 => 54,  178 => 51,  170 => 49,  166 => 48,  161 => 47,  156 => 46,  151 => 43,  145 => 41,  139 => 39,  137 => 38,  132 => 36,  124 => 35,  113 => 29,  111 => 28,  105 => 26,  103 => 25,  100 => 24,  97 => 23,  92 => 21,  89 => 20,  83 => 19,  80 => 18,  78 => 17,  72 => 14,  66 => 10,  60 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}{{crew.name}}{% endblock %}*/
/* */
/* {% block top %}*/
/*     <div class="col-md-2">*/
/*     {%if crew.photo is not null%}*/
/*         <img src="{{crew.photo.path}}" alt="Photo" width="200" height="200" class="left-block"/>*/
/*     {% endif %}*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*         <br><br><br><br><br><br>*/
/*         <div class="user-info">*/
/*             {{crew.name|upper}}*/
/*             <br>*/
/*             <div class="btn-group">*/
/*                 {% if user in crew.users %}*/
/*                     {%if crew.photo is not null%}*/
/*                         <a class="btn btn-custom" href="/photo/{{crew.photo.id}}/edit">Update photo</a>*/
/*                     {% else %} */
/*                         <a class="btn btn-custom" href="/photo/crew/create/{{crew.id}}">Add photo</a>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*                 */
/*                 {% if user in crew.users %}*/
/*                     <a class="btn btn-custom" href="/event/create/{{crew.id}}">Add event</a>*/
/*                 {% endif %}*/
/*                 {#<a class="btn btn-custom" href="/crew/{{crew.id}}/edit">Edit crew</a>#}*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block middle %} */
/*     <p class=" well">{{crew.description}}</p>*/
/*     <div class="text-center">*/
/*     {% if user not in crew.users %}*/
/*         <a class="btn btn-lg btn-custom" href="{{ path('app_crew_addusertocrew', { 'id': crew.id }) }}">JOIN</a>*/
/*     {% else %}*/
/*         <a class="btn btn-lg btn-custom" href="/crew/removeUser/{{crew.id}}">Leave</a>*/
/*     {% endif %}*/
/*     </div>*/
/*     <h2>Our events</h2>*/
/*     <div class="list-group">*/
/*         {%for event in events%}*/
/*             <a class="list-group-item" href="/event/{{event.id}}">*/
/*                 <strong>{{event.name}}</strong>*/
/*                 {{event.date | date('Y-m-d H:i')}}*/
/*             </a>*/
/*         {% else %}  */
/*             <p>No events yet</p> */
/*         {%endfor%}*/
/*     </div>*/
/* {% endblock %}    */
/* {% block middle1 %}     */
/*     <h2>Our members</h2>*/
/*     <div class="list-group">*/
/*     {%for user in users%}*/
/*         <a class="list-group-item" href="/user/{{user.id}}">{{user.username|capitalize}}</a>*/
/*     {% else %}  */
/*         <p>No members yet</p> */
/*     {%endfor%}*/
/*     </div>*/
/* {% endblock %}        */
