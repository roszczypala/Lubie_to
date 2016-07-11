<?php

/* AppBundle:Message:new.html.twig */
class __TwigTemplate_8ed4b77f1f10f9f027411948f56df5995da4e5ccb9f207a7f69f5017decced18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Message:new.html.twig", 1);
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
        $__internal_258918d34b0a4eb2a891bc9aa9b849e4bffc663cb5277f41efb6d5f6e522cb3d = $this->env->getExtension("native_profiler");
        $__internal_258918d34b0a4eb2a891bc9aa9b849e4bffc663cb5277f41efb6d5f6e522cb3d->enter($__internal_258918d34b0a4eb2a891bc9aa9b849e4bffc663cb5277f41efb6d5f6e522cb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Message:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_258918d34b0a4eb2a891bc9aa9b849e4bffc663cb5277f41efb6d5f6e522cb3d->leave($__internal_258918d34b0a4eb2a891bc9aa9b849e4bffc663cb5277f41efb6d5f6e522cb3d_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_102ff7b80a69777ef60cef045ec8dd3bb68810922151ff1660a7ce09fc79f8cc = $this->env->getExtension("native_profiler");
        $__internal_102ff7b80a69777ef60cef045ec8dd3bb68810922151ff1660a7ce09fc79f8cc->enter($__internal_102ff7b80a69777ef60cef045ec8dd3bb68810922151ff1660a7ce09fc79f8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 4
        echo "    <h2>Create message</h2>
";
        
        $__internal_102ff7b80a69777ef60cef045ec8dd3bb68810922151ff1660a7ce09fc79f8cc->leave($__internal_102ff7b80a69777ef60cef045ec8dd3bb68810922151ff1660a7ce09fc79f8cc_prof);

    }

    // line 7
    public function block_middle($context, array $blocks = array())
    {
        $__internal_0856e8433edba6b1fced7f53b26c866abd8e2abdb68e23f416164632f3c2ada8 = $this->env->getExtension("native_profiler");
        $__internal_0856e8433edba6b1fced7f53b26c866abd8e2abdb68e23f416164632f3c2ada8->enter($__internal_0856e8433edba6b1fced7f53b26c866abd8e2abdb68e23f416164632f3c2ada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), 'form_start');
        echo "
    <div class=\"form-group\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), 'widget');
        echo "</div>
    <div class=\"form-group\">
        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Send"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), 'form_end');
        echo "
    <a class=\"btn btn-success btn-block\" href=\"/user/";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receiver"]) ? $context["receiver"] : $this->getContext($context, "receiver")), "id", array()), "html", null, true);
        echo "\">
        Back to user page
    </a>
    
";
        
        $__internal_0856e8433edba6b1fced7f53b26c866abd8e2abdb68e23f416164632f3c2ada8->leave($__internal_0856e8433edba6b1fced7f53b26c866abd8e2abdb68e23f416164632f3c2ada8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Message:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  69 => 13,  64 => 11,  59 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block jumbotron %}*/
/*     <h2>Create message</h2>*/
/* {% endblock %}   */
/* */
/* {% block middle -%}*/
/*     {{ form_start(newForm) }}*/
/*     <div class="form-group">{{ form_widget(newForm) }}</div>*/
/*     <div class="form-group">*/
/*         <input class="btn btn-success" type="submit" value="{{ 'Send'|trans }}" />*/
/*     </div>*/
/*     {{ form_end(newForm) }}*/
/*     <a class="btn btn-success btn-block" href="/user/{{receiver.id}}">*/
/*         Back to user page*/
/*     </a>*/
/*     */
/* {% endblock %}*/
/* */
