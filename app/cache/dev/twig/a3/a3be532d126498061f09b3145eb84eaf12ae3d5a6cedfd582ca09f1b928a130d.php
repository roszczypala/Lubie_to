<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ef1043dbb2f675be18478237a01ebf3d1c84e8591266a0cbc5b35770f50cbe30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cc8cb79ffd446abe1354bd37a8c0babeb22e1a6d26a7a830d71e81ba31359ba = $this->env->getExtension("native_profiler");
        $__internal_4cc8cb79ffd446abe1354bd37a8c0babeb22e1a6d26a7a830d71e81ba31359ba->enter($__internal_4cc8cb79ffd446abe1354bd37a8c0babeb22e1a6d26a7a830d71e81ba31359ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc8cb79ffd446abe1354bd37a8c0babeb22e1a6d26a7a830d71e81ba31359ba->leave($__internal_4cc8cb79ffd446abe1354bd37a8c0babeb22e1a6d26a7a830d71e81ba31359ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d07cfeb375612b80486c3959d094cdb695c81f266eb650202fd32b4b94d59787 = $this->env->getExtension("native_profiler");
        $__internal_d07cfeb375612b80486c3959d094cdb695c81f266eb650202fd32b4b94d59787->enter($__internal_d07cfeb375612b80486c3959d094cdb695c81f266eb650202fd32b4b94d59787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d07cfeb375612b80486c3959d094cdb695c81f266eb650202fd32b4b94d59787->leave($__internal_d07cfeb375612b80486c3959d094cdb695c81f266eb650202fd32b4b94d59787_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ce4e94efafbe5df2fcb5d318681ea8fba02093d8e48e9d6ef6ff63dc69585d2 = $this->env->getExtension("native_profiler");
        $__internal_7ce4e94efafbe5df2fcb5d318681ea8fba02093d8e48e9d6ef6ff63dc69585d2->enter($__internal_7ce4e94efafbe5df2fcb5d318681ea8fba02093d8e48e9d6ef6ff63dc69585d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_7ce4e94efafbe5df2fcb5d318681ea8fba02093d8e48e9d6ef6ff63dc69585d2->leave($__internal_7ce4e94efafbe5df2fcb5d318681ea8fba02093d8e48e9d6ef6ff63dc69585d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d629572a42acbe98cfc276c2a4b65336ed9740b6f019879a478f5d2ae36a1c80 = $this->env->getExtension("native_profiler");
        $__internal_d629572a42acbe98cfc276c2a4b65336ed9740b6f019879a478f5d2ae36a1c80->enter($__internal_d629572a42acbe98cfc276c2a4b65336ed9740b6f019879a478f5d2ae36a1c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_d629572a42acbe98cfc276c2a4b65336ed9740b6f019879a478f5d2ae36a1c80->leave($__internal_d629572a42acbe98cfc276c2a4b65336ed9740b6f019879a478f5d2ae36a1c80_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1629f4e61daf9e30ad17889b32cdc14f7e2de19736d6922ab2cbf9a79d8008ae = $this->env->getExtension("native_profiler");
        $__internal_1629f4e61daf9e30ad17889b32cdc14f7e2de19736d6922ab2cbf9a79d8008ae->enter($__internal_1629f4e61daf9e30ad17889b32cdc14f7e2de19736d6922ab2cbf9a79d8008ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1629f4e61daf9e30ad17889b32cdc14f7e2de19736d6922ab2cbf9a79d8008ae->leave($__internal_1629f4e61daf9e30ad17889b32cdc14f7e2de19736d6922ab2cbf9a79d8008ae_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
