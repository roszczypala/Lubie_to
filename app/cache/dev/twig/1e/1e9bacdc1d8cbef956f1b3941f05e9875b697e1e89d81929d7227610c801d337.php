<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_f8f3d584d40b7039f357cdc679a305b69b6e7d358f70da215b6bbd9b51493358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_a713085ec1d0ae728326320c38ac12375d6c2655df84b400dbc993278f678256 = $this->env->getExtension("native_profiler");
        $__internal_a713085ec1d0ae728326320c38ac12375d6c2655df84b400dbc993278f678256->enter($__internal_a713085ec1d0ae728326320c38ac12375d6c2655df84b400dbc993278f678256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a713085ec1d0ae728326320c38ac12375d6c2655df84b400dbc993278f678256->leave($__internal_a713085ec1d0ae728326320c38ac12375d6c2655df84b400dbc993278f678256_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05b370505f685314babbfd3b4938e12794831547518eb6b3675ff52994acfa63 = $this->env->getExtension("native_profiler");
        $__internal_05b370505f685314babbfd3b4938e12794831547518eb6b3675ff52994acfa63->enter($__internal_05b370505f685314babbfd3b4938e12794831547518eb6b3675ff52994acfa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_05b370505f685314babbfd3b4938e12794831547518eb6b3675ff52994acfa63->leave($__internal_05b370505f685314babbfd3b4938e12794831547518eb6b3675ff52994acfa63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
