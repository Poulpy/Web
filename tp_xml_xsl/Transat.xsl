<?xml version="1.0" encoding="utf-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output encoding="utf-8" method="html" version="5.0" indent="yes" />
  <xsl:template match="transat">
    <html lang="fr">
      <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/route_du_rhum.css" />
        <title>Route du Rhum - 2018</title>
      </head>
      <body>
        <table border="5" cellpadding="10">
          <tr>
            <td>
              <img src="{@logo}" alt="route du rhume" />
            </td>
            <td>
              <xsl:value-of select="@nom" /><br/>
              <xsl:value-of select="ville-depart" /> - 
              <xsl:value-of select="ville-arrivee" /><br/>
              <xsl:value-of select="date-depart" /><br/>
            </td>
          </tr>
          <tr>
            <td>
              <div id="sommaire">
                <xsl:apply-templates select="classes/classe" mode="sommaire" />
              </div>
            </td>
            <td>
              <xsl:apply-templates select="classes/classe" />
            </td>
          </tr>
        </table>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="classe" mode="sommaire">
    <xsl:number count="classe" format="(1) " />
    <xsl:value-of select="@nom" /><br />
  </xsl:template>

  <xsl:template match="classe">
    <div id="{@nom}">
      <xsl:number count="classe" format="(1) " />
      <xsl:value-of select="@nom" /><br />
      <p>
        <xsl:value-of select="descriptif" />
        <br /><br /><br />
        <xsl:apply-templates select="voiliers" />
      </p>
      <a href="#{@nom}">Retourner vers classe</a><br />
      <a href="#sommaire">Retourner vers le sommaire</a><br /><br />
    </div>
  </xsl:template>

  <xsl:template match="voiliers">
    <xsl:apply-templates select="voilier" />
  </xsl:template>

  <xsl:template match="voilier">
    <xsl:value-of select="." /><br />
  </xsl:template>

</xsl:stylesheet>
