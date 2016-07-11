<?php

/* AppBundle:Main:user.html.twig */
class __TwigTemplate_ed45f92da321e7c986d5a8af9751e39de7d8f17c0d7325f5bca936f63e822143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Main:user.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5057d0f70cf934bb3fd2e7de8c3e3c4cce4a639da3d83c8d07f5e05000b9f4e9 = $this->env->getExtension("native_profiler");
        $__internal_5057d0f70cf934bb3fd2e7de8c3e3c4cce4a639da3d83c8d07f5e05000b9f4e9->enter($__internal_5057d0f70cf934bb3fd2e7de8c3e3c4cce4a639da3d83c8d07f5e05000b9f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5057d0f70cf934bb3fd2e7de8c3e3c4cce4a639da3d83c8d07f5e05000b9f4e9->leave($__internal_5057d0f70cf934bb3fd2e7de8c3e3c4cce4a639da3d83c8d07f5e05000b9f4e9_prof);

    }

    // line 4
    public function block_top($context, array $blocks = array())
    {
        $__internal_de93dadd328fad35e914965aac61f8c005ffc95d7c19a05852e9360e8d283ade = $this->env->getExtension("native_profiler");
        $__internal_de93dadd328fad35e914965aac61f8c005ffc95d7c19a05852e9360e8d283ade->enter($__internal_de93dadd328fad35e914965aac61f8c005ffc95d7c19a05852e9360e8d283ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

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
            <p class=\"small\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
            <div class=\"btn-group\">
                ";
        // line 16
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) != (isset($context["loggedUser"]) ? $context["loggedUser"] : $this->getContext($context, "loggedUser")))) {
            // line 17
            echo "                    <a class=\"btn btn-custom\" href=\"/message/new/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\">Message</a>
                ";
        } else {
            // line 19
            echo "                    <a class=\"btn btn-custom\" href=\"/profile/edit\">Update profile</a>
                ";
        }
        // line 21
        echo "            </div>
        </div>
        
    </div>
    
    
";
        
        $__internal_de93dadd328fad35e914965aac61f8c005ffc95d7c19a05852e9360e8d283ade->leave($__internal_de93dadd328fad35e914965aac61f8c005ffc95d7c19a05852e9360e8d283ade_prof);

    }

    // line 30
    public function block_middle($context, array $blocks = array())
    {
        $__internal_db89cb80f6b618e8c3bae3027f294c1da67fecef32aa4fdf4c6bc8e153e2ee3b = $this->env->getExtension("native_profiler");
        $__internal_db89cb80f6b618e8c3bae3027f294c1da67fecef32aa4fdf4c6bc8e153e2ee3b->enter($__internal_db89cb80f6b618e8c3bae3027f294c1da67fecef32aa4fdf4c6bc8e153e2ee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        echo "                    
    <h3 class=\"text-center\">Crews</h3>
    <div class=\"list-group\">
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crews"]) ? $context["crews"] : $this->getContext($context, "crews")));
        foreach ($context['_seq'] as $context["_key"] => $context["crew"]) {
            // line 34
            echo "        <a class=\"list-group-item\" href=\"/crew/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "name", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crew'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
";
        
        $__internal_db89cb80f6b618e8c3bae3027f294c1da67fecef32aa4fdf4c6bc8e153e2ee3b->leave($__internal_db89cb80f6b618e8c3bae3027f294c1da67fecef32aa4fdf4c6bc8e153e2ee3b_prof);

    }

    // line 39
    public function block_middle1($context, array $blocks = array())
    {
        $__internal_6b826ca1a0ad025cfb366ef4444a46cc84fc64c769f7c0cb969b7f5ac73971e6 = $this->env->getExtension("native_profiler");
        $__internal_6b826ca1a0ad025cfb366ef4444a46cc84fc64c769f7c0cb969b7f5ac73971e6->enter($__internal_6b826ca1a0ad025cfb366ef4444a46cc84fc64c769f7c0cb969b7f5ac73971e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle1"));

        echo " 
    <h3 class=\"text-center\">Events</h3>
    <div class=\"list-group\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 43
            echo "        <a class=\"list-group-item\" href=\"/event/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "
            ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", array()), "Y-m-d H:i"), "html", null, true);
            echo "
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6b826ca1a0ad025cfb366ef4444a46cc84fc64c769f7c0cb969b7f5ac73971e6->leave($__internal_6b826ca1a0ad025cfb366ef4444a46cc84fc64c769f7c0cb969b7f5ac73971e6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Main:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 45,  145 => 44,  140 => 43,  136 => 42,  126 => 39,  118 => 36,  107 => 34,  103 => 33,  93 => 30,  80 => 21,  76 => 19,  70 => 17,  68 => 16,  63 => 14,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  36 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block top %}   */
/*     <div class="col-md-2">*/
/*     {%if user.photo is not null%}*/
/*         <img src="{{user.photo.path}}" alt="Photo" width="200" height="200" class="left-block"/>*/
/*     {% endif %}*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*         <br><br><br><br><br><br>*/
/*         <div class="user-info">*/
/*             {{user.username|upper}}*/
/*             <p class="small">{{user.email}}</p>*/
/*             <div class="btn-group">*/
/*                 {% if user != loggedUser %}*/
/*                     <a class="btn btn-custom" href="/message/new/{{user.id}}">Message</a>*/
/*                 {% else %}*/
/*                     <a class="btn btn-custom" href="/profile/edit">Update profile</a>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/*     */
/*     */
/* {% endblock %}*/
/* */
/* */
/* {% block middle %}                    */
/*     <h3 class="text-center">Crews</h3>*/
/*     <div class="list-group">*/
/*     {%for crew in crews%}*/
/*         <a class="list-group-item" href="/crew/{{crew.id}}">{{crew.name}}</a>*/
/*     {%endfor%}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block middle1 %} */
/*     <h3 class="text-center">Events</h3>*/
/*     <div class="list-group">*/
/*     {%for event in events%}*/
/*         <a class="list-group-item" href="/event/{{event.id}}">*/
/*             {{event.name}}*/
/*             {{event.date | date('Y-m-d H:i')}}*/
/*         </a>*/
/*     {%endfor%}*/
/* {% endblock %} */
/* */
/* */
