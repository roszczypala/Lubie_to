<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d06017ef3d39a79fc1337d025d68ad71ca54733f00d1794b4e38b3d53ff9806b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9c62d755226dde95a7dc6611c25e184d372510005a62434389cde6ded2c73a14 = $this->env->getExtension("native_profiler");
        $__internal_9c62d755226dde95a7dc6611c25e184d372510005a62434389cde6ded2c73a14->enter($__internal_9c62d755226dde95a7dc6611c25e184d372510005a62434389cde6ded2c73a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c62d755226dde95a7dc6611c25e184d372510005a62434389cde6ded2c73a14->leave($__internal_9c62d755226dde95a7dc6611c25e184d372510005a62434389cde6ded2c73a14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da0219c82796274a507cc5eeff865552d1f28f82d600ddbe911be84e175f975b = $this->env->getExtension("native_profiler");
        $__internal_da0219c82796274a507cc5eeff865552d1f28f82d600ddbe911be84e175f975b->enter($__internal_da0219c82796274a507cc5eeff865552d1f28f82d600ddbe911be84e175f975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_da0219c82796274a507cc5eeff865552d1f28f82d600ddbe911be84e175f975b->leave($__internal_da0219c82796274a507cc5eeff865552d1f28f82d600ddbe911be84e175f975b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
