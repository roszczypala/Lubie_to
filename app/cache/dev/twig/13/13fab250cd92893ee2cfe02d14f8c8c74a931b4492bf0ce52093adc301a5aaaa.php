<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3e892d59cd62e603b6b87186ecb6409607c1624eb9ca79a914b9beed5e7131ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16e1e4b45f39261ae0f8c1ba13ed81d23861f145c2fbdeb7bfb5758279cab0de = $this->env->getExtension("native_profiler");
        $__internal_16e1e4b45f39261ae0f8c1ba13ed81d23861f145c2fbdeb7bfb5758279cab0de->enter($__internal_16e1e4b45f39261ae0f8c1ba13ed81d23861f145c2fbdeb7bfb5758279cab0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_16e1e4b45f39261ae0f8c1ba13ed81d23861f145c2fbdeb7bfb5758279cab0de->leave($__internal_16e1e4b45f39261ae0f8c1ba13ed81d23861f145c2fbdeb7bfb5758279cab0de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
