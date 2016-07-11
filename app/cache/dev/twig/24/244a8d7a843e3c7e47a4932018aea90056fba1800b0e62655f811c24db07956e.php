<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_52ac30e278bcc7b605c32eb983e53e4f066f52926a03a9f39af14fe3efdc62ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd8d18c4566d8f72ddb39aab33f65d646194c08e1c75e9eb101f14b1e303bb90 = $this->env->getExtension("native_profiler");
        $__internal_cd8d18c4566d8f72ddb39aab33f65d646194c08e1c75e9eb101f14b1e303bb90->enter($__internal_cd8d18c4566d8f72ddb39aab33f65d646194c08e1c75e9eb101f14b1e303bb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8d18c4566d8f72ddb39aab33f65d646194c08e1c75e9eb101f14b1e303bb90->leave($__internal_cd8d18c4566d8f72ddb39aab33f65d646194c08e1c75e9eb101f14b1e303bb90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9891faa7b429ec145d23328559b053dc48cd633c7256138c88d7191e2cdfce72 = $this->env->getExtension("native_profiler");
        $__internal_9891faa7b429ec145d23328559b053dc48cd633c7256138c88d7191e2cdfce72->enter($__internal_9891faa7b429ec145d23328559b053dc48cd633c7256138c88d7191e2cdfce72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9891faa7b429ec145d23328559b053dc48cd633c7256138c88d7191e2cdfce72->leave($__internal_9891faa7b429ec145d23328559b053dc48cd633c7256138c88d7191e2cdfce72_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9402af411e543e1acce2820d3e072276fcd2139b1f1dc5dde1de31784e6c4ee3 = $this->env->getExtension("native_profiler");
        $__internal_9402af411e543e1acce2820d3e072276fcd2139b1f1dc5dde1de31784e6c4ee3->enter($__internal_9402af411e543e1acce2820d3e072276fcd2139b1f1dc5dde1de31784e6c4ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9402af411e543e1acce2820d3e072276fcd2139b1f1dc5dde1de31784e6c4ee3->leave($__internal_9402af411e543e1acce2820d3e072276fcd2139b1f1dc5dde1de31784e6c4ee3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
