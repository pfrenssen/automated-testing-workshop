### Test isValid()

    class UnitTest extends UnitTestCase {
    
      /**
       * Tests valid absolute URLs.
       *
       * @dataProvider providerTestValidAbsoluteData
       * @covers ::isValid
       */
      public function testValidAbsoluteUrl($url) {
        $valid_url = UrlHelper::isValid($url, TRUE);
        $this->assertTrue($valid_url, $url . ' is a valid URL.');
      }
    
    }
