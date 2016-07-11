<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_54d821818a4bf89332b0ddf4ca04ad2fa1845020ce7dea07bac33ce68f29e774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23b46fe9262d615c0e80234bceaf731f3f08b0c185e381b9214613743cdadd8d = $this->env->getExtension("native_profiler");
        $__internal_23b46fe9262d615c0e80234bceaf731f3f08b0c185e381b9214613743cdadd8d->enter($__internal_23b46fe9262d615c0e80234bceaf731f3f08b0c185e381b9214613743cdadd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b46fe9262d615c0e80234bceaf731f3f08b0c185e381b9214613743cdadd8d->leave($__internal_23b46fe9262d615c0e80234bceaf731f3f08b0c185e381b9214613743cdadd8d_prof);

    }

    // line 5
    public function block_middle($context, array $blocks = array())
    {
        $__internal_e340597d886a6866825a6afb6e005a358dc37739f6bc74857c6fc38836f88b9a = $this->env->getExtension("native_profiler");
        $__internal_e340597d886a6866825a6afb6e005a358dc37739f6bc74857c6fc38836f88b9a->enter($__internal_e340597d886a6866825a6afb6e005a358dc37739f6bc74857c6fc38836f88b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e340597d886a6866825a6afb6e005a358dc37739f6bc74857c6fc38836f88b9a->leave($__internal_e340597d886a6866825a6afb6e005a358dc37739f6bc74857c6fc38836f88b9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/* {% extends "::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block middle %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock middle %}*/
/* */
