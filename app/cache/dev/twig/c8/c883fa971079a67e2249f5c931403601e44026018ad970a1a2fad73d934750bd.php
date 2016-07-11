<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_75250a9ed5406907c2f6438270996dc72321bc1c35320f41b395b991e5be0902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_bfb9036bd2ccbf93278f8ab41a211609d7255b57e07cd44566449d860e90be5f = $this->env->getExtension("native_profiler");
        $__internal_bfb9036bd2ccbf93278f8ab41a211609d7255b57e07cd44566449d860e90be5f->enter($__internal_bfb9036bd2ccbf93278f8ab41a211609d7255b57e07cd44566449d860e90be5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfb9036bd2ccbf93278f8ab41a211609d7255b57e07cd44566449d860e90be5f->leave($__internal_bfb9036bd2ccbf93278f8ab41a211609d7255b57e07cd44566449d860e90be5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_628c2324ac6d6e4c35b8c236afc71885b2003ff5d370e6bf73c1de444563601f = $this->env->getExtension("native_profiler");
        $__internal_628c2324ac6d6e4c35b8c236afc71885b2003ff5d370e6bf73c1de444563601f->enter($__internal_628c2324ac6d6e4c35b8c236afc71885b2003ff5d370e6bf73c1de444563601f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_628c2324ac6d6e4c35b8c236afc71885b2003ff5d370e6bf73c1de444563601f->leave($__internal_628c2324ac6d6e4c35b8c236afc71885b2003ff5d370e6bf73c1de444563601f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
