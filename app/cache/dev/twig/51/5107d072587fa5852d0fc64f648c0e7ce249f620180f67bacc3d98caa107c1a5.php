<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_1b79690fa64940b34aec2fcbc0d3e6ee5658ea9ccdbcdba1a9dd8d34e8db7db4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b55b5f932487624ad97b80d7b794b656b07127d1545b724b2a1cf84164e03bb0 = $this->env->getExtension("native_profiler");
        $__internal_b55b5f932487624ad97b80d7b794b656b07127d1545b724b2a1cf84164e03bb0->enter($__internal_b55b5f932487624ad97b80d7b794b656b07127d1545b724b2a1cf84164e03bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b55b5f932487624ad97b80d7b794b656b07127d1545b724b2a1cf84164e03bb0->leave($__internal_b55b5f932487624ad97b80d7b794b656b07127d1545b724b2a1cf84164e03bb0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8529b503c26e24e5c4f7de1bbd7a0f42912db9a78aa47d07546dbb2874d7bed0 = $this->env->getExtension("native_profiler");
        $__internal_8529b503c26e24e5c4f7de1bbd7a0f42912db9a78aa47d07546dbb2874d7bed0->enter($__internal_8529b503c26e24e5c4f7de1bbd7a0f42912db9a78aa47d07546dbb2874d7bed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8529b503c26e24e5c4f7de1bbd7a0f42912db9a78aa47d07546dbb2874d7bed0->leave($__internal_8529b503c26e24e5c4f7de1bbd7a0f42912db9a78aa47d07546dbb2874d7bed0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
