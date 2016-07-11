<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_ae93bebfe2352bd5a1337fcd781c9f2eb70a39609b6c532c2841d650939a5223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f1268f22b8007e3af371f6ee97d49b358705141a8316d64cd19d926fd61e1d99 = $this->env->getExtension("native_profiler");
        $__internal_f1268f22b8007e3af371f6ee97d49b358705141a8316d64cd19d926fd61e1d99->enter($__internal_f1268f22b8007e3af371f6ee97d49b358705141a8316d64cd19d926fd61e1d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1268f22b8007e3af371f6ee97d49b358705141a8316d64cd19d926fd61e1d99->leave($__internal_f1268f22b8007e3af371f6ee97d49b358705141a8316d64cd19d926fd61e1d99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a57afb919ce33f7c1755f30c89212a8f421861afece25981f19536709c575c8f = $this->env->getExtension("native_profiler");
        $__internal_a57afb919ce33f7c1755f30c89212a8f421861afece25981f19536709c575c8f->enter($__internal_a57afb919ce33f7c1755f30c89212a8f421861afece25981f19536709c575c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a57afb919ce33f7c1755f30c89212a8f421861afece25981f19536709c575c8f->leave($__internal_a57afb919ce33f7c1755f30c89212a8f421861afece25981f19536709c575c8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
