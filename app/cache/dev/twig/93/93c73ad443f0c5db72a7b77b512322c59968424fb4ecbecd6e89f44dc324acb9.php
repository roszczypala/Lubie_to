<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f8f8f1f8ca8e82d2f72759ce1f692a0b7d0be90a55288fbc9e72bb03c8baae92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2fbd9863b6a4ea05be4943f46cb4cd3e59acb5b553f4f083bc7588789e982451 = $this->env->getExtension("native_profiler");
        $__internal_2fbd9863b6a4ea05be4943f46cb4cd3e59acb5b553f4f083bc7588789e982451->enter($__internal_2fbd9863b6a4ea05be4943f46cb4cd3e59acb5b553f4f083bc7588789e982451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fbd9863b6a4ea05be4943f46cb4cd3e59acb5b553f4f083bc7588789e982451->leave($__internal_2fbd9863b6a4ea05be4943f46cb4cd3e59acb5b553f4f083bc7588789e982451_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_501b25b3a35cafa585ee17293abf76e41a5597c9b1a0a1723c8f11b803886655 = $this->env->getExtension("native_profiler");
        $__internal_501b25b3a35cafa585ee17293abf76e41a5597c9b1a0a1723c8f11b803886655->enter($__internal_501b25b3a35cafa585ee17293abf76e41a5597c9b1a0a1723c8f11b803886655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_501b25b3a35cafa585ee17293abf76e41a5597c9b1a0a1723c8f11b803886655->leave($__internal_501b25b3a35cafa585ee17293abf76e41a5597c9b1a0a1723c8f11b803886655_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
