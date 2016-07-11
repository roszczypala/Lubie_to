<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_85ec09d4e3a02d03801d167bd451550dd305647b906ed30935380a014c0855b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1edb4a41f51e5118b7fb76736e55d857557a02636953e0dba304ac53673abbc8 = $this->env->getExtension("native_profiler");
        $__internal_1edb4a41f51e5118b7fb76736e55d857557a02636953e0dba304ac53673abbc8->enter($__internal_1edb4a41f51e5118b7fb76736e55d857557a02636953e0dba304ac53673abbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1edb4a41f51e5118b7fb76736e55d857557a02636953e0dba304ac53673abbc8->leave($__internal_1edb4a41f51e5118b7fb76736e55d857557a02636953e0dba304ac53673abbc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a8e5efb21bcb112dca26302841139107f8072112c3bf03dedd0dda4fae5de50 = $this->env->getExtension("native_profiler");
        $__internal_2a8e5efb21bcb112dca26302841139107f8072112c3bf03dedd0dda4fae5de50->enter($__internal_2a8e5efb21bcb112dca26302841139107f8072112c3bf03dedd0dda4fae5de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a8e5efb21bcb112dca26302841139107f8072112c3bf03dedd0dda4fae5de50->leave($__internal_2a8e5efb21bcb112dca26302841139107f8072112c3bf03dedd0dda4fae5de50_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03c6ddb2f00c92783c90a59fa5f25a092641221c3eb454b489e250e16a46bdd1 = $this->env->getExtension("native_profiler");
        $__internal_03c6ddb2f00c92783c90a59fa5f25a092641221c3eb454b489e250e16a46bdd1->enter($__internal_03c6ddb2f00c92783c90a59fa5f25a092641221c3eb454b489e250e16a46bdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03c6ddb2f00c92783c90a59fa5f25a092641221c3eb454b489e250e16a46bdd1->leave($__internal_03c6ddb2f00c92783c90a59fa5f25a092641221c3eb454b489e250e16a46bdd1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_904aeaf2b1ec17aaec10ba9dac7aeadd278878cc09c45d2642a316421d70ec18 = $this->env->getExtension("native_profiler");
        $__internal_904aeaf2b1ec17aaec10ba9dac7aeadd278878cc09c45d2642a316421d70ec18->enter($__internal_904aeaf2b1ec17aaec10ba9dac7aeadd278878cc09c45d2642a316421d70ec18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_904aeaf2b1ec17aaec10ba9dac7aeadd278878cc09c45d2642a316421d70ec18->leave($__internal_904aeaf2b1ec17aaec10ba9dac7aeadd278878cc09c45d2642a316421d70ec18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
