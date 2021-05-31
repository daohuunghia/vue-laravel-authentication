import LocalScheme from '@nuxtjs/auth/lib/schemes/local'

export default class ApiScheme extends LocalScheme {
  async login (endpoint) {
    if (!this.options.endpoints.login) {
      return
    }

    // Ditch any leftover local tokens before attempting to log in
    await this.$auth.reset()

    const { response, result } = await this.$auth.request(
      this._getApiParams(endpoint),
      this.options.endpoints.login,
      true
    )

    const token = result.response.token
    this.$auth.setToken(this.name, token)
    // this._setToken(token)
    this.$auth.setUser(result.response.user)

    return response
  }

  _getApiParams (params, token = '') {
    return {
      data: {
        env: process.env.APP_ENV,
        app_version: process.env.APP_VERSION,
        lang: process.env.LANGUAGE,
        token,
        params
      }
    }
  }
}
