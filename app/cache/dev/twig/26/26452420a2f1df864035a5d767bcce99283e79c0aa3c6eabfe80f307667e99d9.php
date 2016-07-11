<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8ac118ad1f6c5a8c92174509e04a13f5a9db3f82b0efd58a8e2c6805ca75b75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5925450cca06b750e20931cbef2a50bbe280173447da45e58247b735dd0c401 = $this->env->getExtension("native_profiler");
        $__internal_d5925450cca06b750e20931cbef2a50bbe280173447da45e58247b735dd0c401->enter($__internal_d5925450cca06b750e20931cbef2a50bbe280173447da45e58247b735dd0c401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5925450cca06b750e20931cbef2a50bbe280173447da45e58247b735dd0c401->leave($__internal_d5925450cca06b750e20931cbef2a50bbe280173447da45e58247b735dd0c401_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49275fb35c5614d82f83ac04d01f64f5770ad2ccc1148482e8a9888232add77f = $this->env->getExtension("native_profiler");
        $__internal_49275fb35c5614d82f83ac04d01f64f5770ad2ccc1148482e8a9888232add77f->enter($__internal_49275fb35c5614d82f83ac04d01f64f5770ad2ccc1148482e8a9888232add77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_49275fb35c5614d82f83ac04d01f64f5770ad2ccc1148482e8a9888232add77f->leave($__internal_49275fb35c5614d82f83ac04d01f64f5770ad2ccc1148482e8a9888232add77f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
