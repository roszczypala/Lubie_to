<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5db1bfcd66b889778ee92adb90f13042b4afb023c9bfbf1a1ccd9c85fef4ba2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94eda959059c8e13f5b084679a896d3c24f6696769c9b2d3759461f1a1cf76f3 = $this->env->getExtension("native_profiler");
        $__internal_94eda959059c8e13f5b084679a896d3c24f6696769c9b2d3759461f1a1cf76f3->enter($__internal_94eda959059c8e13f5b084679a896d3c24f6696769c9b2d3759461f1a1cf76f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h3>
</div>
";
        
        $__internal_94eda959059c8e13f5b084679a896d3c24f6696769c9b2d3759461f1a1cf76f3->leave($__internal_94eda959059c8e13f5b084679a896d3c24f6696769c9b2d3759461f1a1cf76f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <h3>{{ 'profile.show.username'|trans }}: {{ user.username }}</h3>*/
/*     <h3>{{ 'profile.show.email'|trans }}: {{ user.email }}</h3>*/
/* </div>*/
/* */
