<?hh

class C<reify Ta, reify Tb> {
  public static function f() {
    new Ta();
  }
}

<<__EntryPoint>> function main(): void {}
