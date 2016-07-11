<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0f29107e4cfe9c0442fb38eb261cacced265744a24314b184cb5167f1aa6e467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_af102ad552e9ef51321f2d41f52970388e08133b36e453b277b5f0b4f4f9480a = $this->env->getExtension("native_profiler");
        $__internal_af102ad552e9ef51321f2d41f52970388e08133b36e453b277b5f0b4f4f9480a->enter($__internal_af102ad552e9ef51321f2d41f52970388e08133b36e453b277b5f0b4f4f9480a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af102ad552e9ef51321f2d41f52970388e08133b36e453b277b5f0b4f4f9480a->leave($__internal_af102ad552e9ef51321f2d41f52970388e08133b36e453b277b5f0b4f4f9480a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fdd5195f25f75a105c589342e2aa3d1ba4022cc9bc6601097f55a66d38425a6 = $this->env->getExtension("native_profiler");
        $__internal_3fdd5195f25f75a105c589342e2aa3d1ba4022cc9bc6601097f55a66d38425a6->enter($__internal_3fdd5195f25f75a105c589342e2aa3d1ba4022cc9bc6601097f55a66d38425a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3fdd5195f25f75a105c589342e2aa3d1ba4022cc9bc6601097f55a66d38425a6->leave($__internal_3fdd5195f25f75a105c589342e2aa3d1ba4022cc9bc6601097f55a66d38425a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
