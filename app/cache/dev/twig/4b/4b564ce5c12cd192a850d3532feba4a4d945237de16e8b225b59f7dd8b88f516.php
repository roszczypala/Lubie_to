<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_214f716583762c39db8def0e0129d18966308c293f1f63a2ba849eed6e77ba26 extends Twig_Template
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
        $__internal_270ce4ab24a7b9e6acfb105651d556d859af9a09fd534e47498f1e0fc92b4951 = $this->env->getExtension("native_profiler");
        $__internal_270ce4ab24a7b9e6acfb105651d556d859af9a09fd534e47498f1e0fc92b4951->enter($__internal_270ce4ab24a7b9e6acfb105651d556d859af9a09fd534e47498f1e0fc92b4951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_270ce4ab24a7b9e6acfb105651d556d859af9a09fd534e47498f1e0fc92b4951->leave($__internal_270ce4ab24a7b9e6acfb105651d556d859af9a09fd534e47498f1e0fc92b4951_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
