<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_cab77c410546768880b99ee2da7020c3067b2f9304ce6fdd285cf638318b7ee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_f34abf1fe1341c80e200c36dd23c99797e6efecc381e49000b10f0f39bdce7ca = $this->env->getExtension("native_profiler");
        $__internal_f34abf1fe1341c80e200c36dd23c99797e6efecc381e49000b10f0f39bdce7ca->enter($__internal_f34abf1fe1341c80e200c36dd23c99797e6efecc381e49000b10f0f39bdce7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f34abf1fe1341c80e200c36dd23c99797e6efecc381e49000b10f0f39bdce7ca->leave($__internal_f34abf1fe1341c80e200c36dd23c99797e6efecc381e49000b10f0f39bdce7ca_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_136dcc2c568886e37b1ebc042217578f834848a294ee7e254769d585eb12208f = $this->env->getExtension("native_profiler");
        $__internal_136dcc2c568886e37b1ebc042217578f834848a294ee7e254769d585eb12208f->enter($__internal_136dcc2c568886e37b1ebc042217578f834848a294ee7e254769d585eb12208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_136dcc2c568886e37b1ebc042217578f834848a294ee7e254769d585eb12208f->leave($__internal_136dcc2c568886e37b1ebc042217578f834848a294ee7e254769d585eb12208f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
