<?php

/* @CoreHome/getPromoVideo.twig */
class __TwigTemplate_fcfdbd4ddb1e7eae165da217e745e6fe2191125b457cfec498f1fd35fe822d51 extends Twig_Template
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
        // line 1
        echo "<div id=\"piwik-promo\">
    <div id=\"piwik-promo-video\">
        <div id=\"piwik-promo-thumbnail\">
            <img src=\"plugins/Morpheus/images/video_play.png\"/>
        </div>

        <div id=\"piwik-promo-embed\" style=\"display:none;\">
        </div>
    </div>

    <a id=\"piwik-promo-videos-link\" href=\"http://piwik.org/blog/2012/12/piwik-how-to-videos/\" rel=\"noreferrer\"  target=\"_blank\">
        ";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ViewAllPiwikVideoTutorials")), "html", null, true);
        echo "
    </a>

    <div id=\"piwik-promo-share\">
        <span>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ShareThis")), "html", null, true);
        echo ":</span>

        ";
        // line 19
        echo "        <a href=\"http://www.facebook.com/sharer.php?u=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(($context["promoVideoUrl"] ?? $this->getContext($context, "promoVideoUrl"))), "html", null, true);
        echo "\" rel=\"noreferrer\"  target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        ";
        // line 24
        echo "        <a href=\"http://twitter.com/share?text=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(($context["shareText"] ?? $this->getContext($context, "shareText"))), "html", null, true);
        echo "&url=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(($context["promoVideoUrl"] ?? $this->getContext($context, "promoVideoUrl"))), "html", null, true);
        echo "\" rel=\"noreferrer\"  target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        ";
        // line 29
        echo "        <a href=\"mailto:?body=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(($context["shareTextLong"] ?? $this->getContext($context, "shareTextLong")), true), "html", null, true);
        echo "&subject=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(($context["shareText"] ?? $this->getContext($context, "shareText")), true), "html", null, true);
        echo "\" target=\"_blank\">
            <img src=\"plugins/Morpheus/images/email.png\" />
        </a>
    </div>

    <div style=\"clear:both;\"></div>

    <div id=\"piwik-widget-footer\" style=\"color:#666;\">";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_CloseWidgetDirections")), "html", null, true);
        echo "</div>
</div>

<script type=\"application/javascript\">
    \$(function () {
        \$('#piwik-promo-thumbnail').click(function () {
            var promoEmbed = \$('#piwik-promo-embed'),
                    widgetWidth = \$(this).closest('.widgetContent').width(),
                    height = (266 * widgetWidth) / 421,
                    embedHtml = '<iframe width=\"100%\" height=\"' + height + '\" src=\"https://www.youtube-nocookie.com/embed/OslfF_EH81g?autoplay=1&vq=hd720&wmode=transparent\" frameborder=\"0\" wmode=\"Opaque\"></iframe>';

            \$(this).hide();
            promoEmbed.height(height).html(embedHtml);
            promoEmbed.show();
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getPromoVideo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 36,  62 => 29,  52 => 24,  44 => 19,  39 => 16,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"piwik-promo\">
    <div id=\"piwik-promo-video\">
        <div id=\"piwik-promo-thumbnail\">
            <img src=\"plugins/Morpheus/images/video_play.png\"/>
        </div>

        <div id=\"piwik-promo-embed\" style=\"display:none;\">
        </div>
    </div>

    <a id=\"piwik-promo-videos-link\" href=\"http://piwik.org/blog/2012/12/piwik-how-to-videos/\" rel=\"noreferrer\"  target=\"_blank\">
        {{ 'CoreHome_ViewAllPiwikVideoTutorials'|translate }}
    </a>

    <div id=\"piwik-promo-share\">
        <span>{{ 'CoreHome_ShareThis'|translate }}:</span>

        {# facebook #}
        <a href=\"http://www.facebook.com/sharer.php?u={{ promoVideoUrl|url_encode }}\" rel=\"noreferrer\"  target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        {# twitter #}
        <a href=\"http://twitter.com/share?text={{ shareText|url_encode }}&url={{ promoVideoUrl|url_encode }}\" rel=\"noreferrer\"  target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        {# email #}
        <a href=\"mailto:?body={{ shareTextLong|url_encode(true) }}&subject={{ shareText|url_encode(true) }}\" target=\"_blank\">
            <img src=\"plugins/Morpheus/images/email.png\" />
        </a>
    </div>

    <div style=\"clear:both;\"></div>

    <div id=\"piwik-widget-footer\" style=\"color:#666;\">{{ 'CoreHome_CloseWidgetDirections'|translate }}</div>
</div>

<script type=\"application/javascript\">
    \$(function () {
        \$('#piwik-promo-thumbnail').click(function () {
            var promoEmbed = \$('#piwik-promo-embed'),
                    widgetWidth = \$(this).closest('.widgetContent').width(),
                    height = (266 * widgetWidth) / 421,
                    embedHtml = '<iframe width=\"100%\" height=\"' + height + '\" src=\"https://www.youtube-nocookie.com/embed/OslfF_EH81g?autoplay=1&vq=hd720&wmode=transparent\" frameborder=\"0\" wmode=\"Opaque\"></iframe>';

            \$(this).hide();
            promoEmbed.height(height).html(embedHtml);
            promoEmbed.show();
        });
    });
</script>
", "@CoreHome/getPromoVideo.twig", "/var/www/html/php-piwik/plugins/CoreHome/templates/getPromoVideo.twig");
    }
}
