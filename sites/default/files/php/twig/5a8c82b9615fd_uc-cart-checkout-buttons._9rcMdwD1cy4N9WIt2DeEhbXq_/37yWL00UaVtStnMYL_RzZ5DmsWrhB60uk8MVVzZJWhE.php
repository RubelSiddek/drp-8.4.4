<?php

/* modules/ubercart/uc_cart/templates/uc-cart-checkout-buttons.html.twig */
class __TwigTemplate_7bc57354640b596af0fea190a9aeb7c408ab7b566f6bf730d79a3286f13e2a31 extends Twig_Template
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
        $tags = array("if" => 16, "for" => 22);
        $filters = array("first" => 14, "length" => 16, "t" => 19, "slice" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('first', 'length', 't', 'slice'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, ($context["buttons"] ?? null)), "html", null, true));
        echo "

";
        // line 16
        if ((twig_length_filter($this->env, ($context["buttons"] ?? null)) > 1)) {
            // line 17
            echo "  <div class=\"uc-cart-checkout-button-container clearfix\">
    <div class=\"uc-cart-checkout-button\">
      <div class=\"uc-cart-checkout-button-separator\">";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("- or -")));
            echo "</div>
      ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_slice($this->env, ($context["buttons"] ?? null), 1, 1), "html", null, true));
            echo "
    </div>
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["buttons"] ?? null), 2, null));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 23
                echo "      <div class=\"uc-cart-checkout-button\">
        ";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["button"], "html", null, true));
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_cart/templates/uc-cart-checkout-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  70 => 24,  67 => 23,  63 => 22,  58 => 20,  54 => 19,  50 => 17,  48 => 16,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/ubercart/uc_cart/templates/uc-cart-checkout-buttons.html.twig", "F:\\Xampp\\htdocs\\drp-8.4.4\\modules\\ubercart\\uc_cart\\templates\\uc-cart-checkout-buttons.html.twig");
    }
}
