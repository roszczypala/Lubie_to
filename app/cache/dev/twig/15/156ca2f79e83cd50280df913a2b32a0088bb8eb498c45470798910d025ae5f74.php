<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a050d7d32590940eecf22944a9fcf1b00b67a401fefbf1d38ec3a4c90c67af53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d103796d17390089b59572c71f6f3dfe0bb81bf06b9fc2dcb648db7e06775e8b = $this->env->getExtension("native_profiler");
        $__internal_d103796d17390089b59572c71f6f3dfe0bb81bf06b9fc2dcb648db7e06775e8b->enter($__internal_d103796d17390089b59572c71f6f3dfe0bb81bf06b9fc2dcb648db7e06775e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d103796d17390089b59572c71f6f3dfe0bb81bf06b9fc2dcb648db7e06775e8b->leave($__internal_d103796d17390089b59572c71f6f3dfe0bb81bf06b9fc2dcb648db7e06775e8b_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_40aeed004e0e477aab8e1effafd2b25cef78b3d39c7603c3bd660d115cdcc250 = $this->env->getExtension("native_profiler");
        $__internal_40aeed004e0e477aab8e1effafd2b25cef78b3d39c7603c3bd660d115cdcc250->enter($__internal_40aeed004e0e477aab8e1effafd2b25cef78b3d39c7603c3bd660d115cdcc250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 4
        echo "    <h1>Edit</h1>            
";
        
        $__internal_40aeed004e0e477aab8e1effafd2b25cef78b3d39c7603c3bd660d115cdcc250->leave($__internal_40aeed004e0e477aab8e1effafd2b25cef78b3d39c7603c3bd660d115cdcc250_prof);

    }

    // line 7
    public function block_middle($context, array $blocks = array())
    {
        $__internal_eb9e72815cf4f30a0ef977d6291ca24d2d50cd2edda1a7daf7d62fb628972626 = $this->env->getExtension("native_profiler");
        $__internal_eb9e72815cf4f30a0ef977d6291ca24d2d50cd2edda1a7daf7d62fb628972626->enter($__internal_eb9e72815cf4f30a0ef977d6291ca24d2d50cd2edda1a7daf7d62fb628972626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 8
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        echo "   
";
        
        $__internal_eb9e72815cf4f30a0ef977d6291ca24d2d50cd2edda1a7daf7d62fb628972626->leave($__internal_eb9e72815cf4f30a0ef977d6291ca24d2d50cd2edda1a7daf7d62fb628972626_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block jumbotron %}*/
/*     <h1>Edit</h1>            */
/* {% endblock %}*/
/* */
/* {% block middle %}*/
/*     {% include "FOSUserBundle:Profile:edit_content.html.twig" %}   */
/* {% endblock %}*/
